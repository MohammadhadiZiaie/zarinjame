<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'permissions', 'sub_roles'];

    // برای دسترسی به sub_roles
    public function getSubRolesAttribute($value)
    {
        // تبدیل رشته JSON به آرایه، اگر این متغیر یک رشته باشد
        return is_string($value) ? json_decode($value, true) : $value;
    }
    
    public function setSubRolesAttribute($value)
    {
        // ذخیره‌سازی آرایه به صورت JSON
        $this->attributes['sub_roles'] = json_encode($value);
    }
    
    // در مدل Role
public function userRoles()
{
    return $this->hasMany(UserRole::class, 'role_id');
}


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles', 'role_id', 'user_id');
    }
}
