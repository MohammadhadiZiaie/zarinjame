<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userRolesSeeder extends Seeder
{
    public function run()
    {
        // ابتدا شناسه‌های role را از جدول roles پیدا می‌کنیم.
        $adminRoleId = DB::table('roles')->where('name', 'admin')->first()->id;
        $operatorRoleId = DB::table('roles')->where('name', 'operator')->first()->id;
        $managerRoleId = DB::table('roles')->where('name', 'manager')->first()->id;

        // اضافه کردن نقش‌ها به جدول user_roles
        DB::table('user_roles')->insert([
            [
                'user_id' => 1, // شناسه کاربر ادمین
                'role_id' => $adminRoleId,
                'sub_role' => 'admin_main', // زیرنقش برای ادمین
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // شناسه کاربر اپراتور
                'role_id' => $operatorRoleId,
                'sub_role' => 'operator_cutting', // زیرنقش برای اپراتور دوخت
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3, // شناسه کاربر مدیر
                'role_id' => $managerRoleId,
                'sub_role' => 'manager_production', // زیرنقش برای مدیر تولید
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4, // شناسه کاربر مدیر مالی
                'role_id' => $managerRoleId,
                'sub_role' => 'manager_finance', // زیرنقش برای مدیر مالی
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5, // شناسه کاربر مدیر کیفیت
                'role_id' => $managerRoleId,
                'sub_role' => 'manager_quality', // زیرنقش برای مدیر کیفیت
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
