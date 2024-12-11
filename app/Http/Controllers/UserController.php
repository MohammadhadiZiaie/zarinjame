<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser() {
        $roles = Role::all(); 
        return view('adduser', compact('roles'));
    }
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
        'role_id' => 'required|exists:roles,id',
    ]);

    // ایجاد کاربر جدید
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'role' => $request->role, // مقدار role از فرم
    ]);

    // ثبت نقش در جدول user_roles
    UserRole::create([
        'user_id' => $user->id,
        'role_id' => $validatedData['role_id'],
        'sub_role' => $request->sub_role, // اگر زیرنقش وجود دارد
    ]);

    return redirect()->route('users.addUser')->with('success', 'کاربر با موفقیت افزوده شد.');

    }

    public function list(){
        $users = User::with('roles')->get();
        return view('listuser', compact('users'));
        }





    

}
