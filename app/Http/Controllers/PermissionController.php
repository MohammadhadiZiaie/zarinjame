<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{
    public function showForm()
    {
        $roles = Role::whereNull('parent_role_id')
            ->where('name', '!=', 'admin') // ادمین را فیلتر کنید
            ->get();

        $allPermissions = config('permissions'); // دریافت لیست مستر دسترسی‌ها به صورت کلید-مقدار

        return view('permissions', compact('roles', 'allPermissions'));
    }

    public function getSubRoles(Request $request)
    {
        $roleId = $request->role_id;

        // دریافت زیرنقش‌ها از جدول roles، فقط برای نقش‌هایی که parent_role_id برابر با شناسه نقش انتخاب شده باشد
        $subRoles = Role::where('parent_role_id', $roleId)
                        ->pluck('name', 'id')
                        ->toArray();

        return response()->json($subRoles);
    }

    public function getAccessOptions(Request $request)
    {
        $roleId = $request->role_id;       // نوع کاربر
        $subRoleId = $request->sub_role;  // زیر نقش

        try {
            // پیدا کردن نوع کاربر (role)
            $role = Role::find($roleId);
            if (!$role) {
                Log::error('Role not found', ['role_id' => $roleId]);
                return response()->json(['error' => 'نقش پیدا نشد.'], 404);
            }

            // پیدا کردن زیر نقش
            $subRole = Role::find($subRoleId);
            if (!$subRole || $subRole->parent_role_id != $roleId) {
                Log::error('Sub-role not valid', ['sub_role' => $subRoleId, 'role_id' => $roleId]);
                return response()->json(['error' => 'زیر نقش معتبر نیست.'], 404);
            }

            // دسترسی‌های نقش اصلی
            $rolePermissions = $role->permissions ?? [];

            // دسترسی‌های زیر نقش
            $subRolePermissions = $subRole->permissions ?? [];

            // ترکیب دسترسی‌ها
            $mergedPermissions = array_unique(array_merge($rolePermissions, $subRolePermissions));

            // ارسال دسترسی‌های موجود و لیست مستر دسترسی‌ها به صورت کلید-مقدار
            return response()->json([
                'mergedPermissions' => array_values($mergedPermissions), // اطمینان از اینکه آرایه است
                'allPermissions' => config('permissions'),
            ]);
        } catch (\Exception $e) {
            Log::error('Error in getAccessOptions', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'خطای سرور رخ داده است.'], 500);
        }
    }

    public function savePermissions(Request $request)
    {
        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
            'sub_role' => 'required|exists:roles,id',
            'access' => 'required|array',
        ]);

        try {
            // پیدا کردن زیر نقش
            $subRole = Role::find($validated['sub_role']);
            if (!$subRole || $subRole->parent_role_id != $validated['role_id']) {
                return response()->json(['error' => 'زیر نقش معتبر نیست.'], 404);
            }

            // جایگزین کردن دسترسی‌های زیر نقش با دسترسی‌های جدید
            $subRole->permissions = array_unique($validated['access']);
            $subRole->save();

            return response()->json(['message' => 'دسترسی‌ها با موفقیت ذخیره شد.']);
        } catch (\Exception $e) {
            Log::error('Error in savePermissions', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'خطای سرور رخ داده است.'], 500);
        }
    }
}
