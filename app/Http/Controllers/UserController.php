<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser() {
        $roles = Role::whereIn('name', ['admin', 'operator', 'manager'])->get();
        return view('adduser', compact('roles'));
    }
    
    public function getSubRoles(Request $request) {
        $roleId = $request->role_id;
        $subRoles = UserRole::where('role_id', $roleId)->pluck('sub_role')->unique();
        
        return response()->json(['subRoles' => $subRoles]);
    }
    
    
    
    public function list()
    {
        // بارگذاری نقش‌ها و زیرنقش‌ها
        $users = User::with(['roles.userRoles'])->get(); // دریافت نقش‌ها و زیرنقش‌ها
    
        return view('listuser', compact('users'));
    }
    
    
    private function getDepartmentByRole($roleId)
{
    $role = Role::find($roleId);
    
    switch ($role->name) {
        case 'admin':
            return 'مدیریت';
        case 'operator':
            return 'اپراتور';
        case 'manager':
            return 'مدیر';
        default:
            return 'نامشخص';
    }
}

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:6',
                'role_id' => 'required|exists:roles,id',
                'sub_role' => 'nullable|string',
                'role_name' => 'nullable|string',
            ]);

            $department = $this->getDepartmentByRole($validatedData['role_id']);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'role_id' => $validatedData['role_id'], 
                'department' => $department, 


            ]);
            $user->roles()->updateExistingPivot($validatedData['role_id'], [
                'sub_role' => $request->sub_role,
                'updated_at' => now(), // برای بروزرسانی زمان
                'created_at' => now(), // اگر می‌خواهید زمان ایجاد را نیز ذخیره کنید
            ]);
            
        
            // اضافه کردن نقش به جدول user_roles
            $user->roles()->attach($validatedData['role_id']);
            
            // ثبت زیرنقش‌ها در جدول user_roles
            if ($request->filled('sub_role')) {
                $user->roles()->updateExistingPivot($validatedData['role_id'], ['sub_role' => $request->sub_role]);
            }
        
            return redirect()->route('users.addUser')->with('success', 'کاربر با موفقیت افزوده شد.');
        }
        


    

}
