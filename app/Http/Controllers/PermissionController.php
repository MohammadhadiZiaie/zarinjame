<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{
    public function showForm()
    {
        $roles = Role::whereNull('parent_role_id')
            ->where('name', '!=', 'admin') // ادمین را فیلتر کنید
            ->get();

        return view('permissions', compact('roles'));
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
        $roleId = $request->role_id;  // نوع کاربر
        $subRole = $request->sub_role; // زیر نقش
    
        // پیدا کردن نوع کاربر (role)
        $role = Role::find($roleId);
        if (!$role) {
            Log::error('Role not found', ['role_id' => $roleId]);  // گزارش خطا در لاگ
            return response()->json(['error' => 'نقش پیدا نشد.'], 404);
        }
    
        // پیدا کردن زیر نقش
        $subRoleData = Role::find($subRole);
        if (!$subRoleData || $subRoleData->parent_role_id != $roleId) {
            Log::error('Sub-role not valid', ['sub_role' => $subRole, 'role_id' => $roleId]);  // گزارش خطا در لاگ
            return response()->json(['error' => 'زیر نقش معتبر نیست.'], 404);
        }
    
        // دسترسی‌های نوع کاربر
        $permissions = json_decode($role->permissions, true);
    
        // دسترسی‌های زیر نقش
        $subRolePermissions = UserRole::where('role_id', $roleId)
                                        ->where('sub_role', $subRole)
                                        ->pluck('permissions')
                                        ->first();
    
        if ($subRolePermissions) {
            $subRolePermissions = json_decode($subRolePermissions, true);
            $permissions = array_merge($permissions, $subRolePermissions); // ادغام دسترسی‌های نوع کاربر و زیر نقش
        }
    
        return response()->json($permissions); // بازگرداندن دسترسی‌ها
    }
    
    
    

    public function savePermissions(Request $request)
    {
        $validated = $request->validate([
            'role_id' => 'required|exists:roles,id',
            'sub_role' => 'required|string',
            'access' => 'required|array',
        ]);

        // ذخیره دسترسی‌ها
        return response()->json(['message' => 'دسترسی‌ها با موفقیت ذخیره شد.']);
    }
}
