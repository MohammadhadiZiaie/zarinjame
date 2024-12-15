<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Role;

class SettingController extends Controller
{

    public function access(){
        return view("access");
    }
    public function getRolesForUserType(Request $request)
{
    $roles = Role::where('user_type', $request->user_type)->get();
    $rolesWithPermissions = $roles->map(function ($role) {
        $role->permissions = json_decode($role->permissions, true); // تبدیل JSON به آرایه
        return $role;
    });

    return response()->json($rolesWithPermissions);
}

    

    
}
