<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;
    protected $table = 'user_roles'; 
    protected $fillable = ['user_id', 'role_id', 'sub_role'];
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


}
