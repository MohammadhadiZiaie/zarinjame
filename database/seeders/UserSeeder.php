<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // شناسه‌های role که شما در جدول roles دارید
        $adminRoleId = 1;  // فرض کنید ID نقش ادمین 1 است
        $operatorRoleId = 2;  // فرض کنید ID نقش اپراتور 2 است
        $managerRoleId = 3;  // فرض کنید ID نقش مدیر 3 است

        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'), // رمز عبور را در اینجا تغییر دهید
                'role_id' => $adminRoleId,
                'department' => 'Management',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Operator User',
                'email' => 'operator@example.com',
                'password' => bcrypt('password'),
                'role_id' => $operatorRoleId,
                'department' => 'Cutting',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@example.com',
                'password' => bcrypt('password'),
                'role_id' => $managerRoleId,
                'department' => 'Production',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Finance Manager User',
                'email' => 'finance_manager@example.com',
                'password' => bcrypt('password'),
                'role_id' => $managerRoleId,
                'department' => 'Finance',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Quality Manager User',
                'email' => 'quality_manager@example.com',
                'password' => bcrypt('password'),
                'role_id' => $managerRoleId,
                'department' => 'Quality',
                'last_login_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
