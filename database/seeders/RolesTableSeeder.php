<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    public function run()
{
    DB::table('roles')->updateOrInsert(
        ['name' => 'admin'],
        [
            'description' => 'مدیر کل با دسترسی کامل',
            'status' => 'active',
            'permissions' => json_encode([
                'view_dashboard' => true,
                'manage_orders' => true,
                'manage_production' => true,
                'view_reports' => true,
                'manage_users' => true,
                'manage_inventory' => true,
                'manage_financials' => true,
                'manage_settings' => true
            ]),
            'sub_role' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );
    
    DB::table('roles')->updateOrInsert(
        ['name' => 'operator_sewing'],  // نام جدید برای نقش اپراتور با دسترسی به دوخت
        [
            'description' => 'اپراتور با دسترسی به دوخت',
            'status' => 'active',
            'permissions' => json_encode([
                'view_dashboard' => true,
                'manage_orders' => true,
                'view_reports' => true,
                'manage_sewing' => true,
            ]),
            'sub_role' => 'sewing',
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );

    DB::table('roles')->updateOrInsert(
        ['name' => 'operator_production'],  // نام جدید برای نقش اپراتور با دسترسی به تولید
        [
            'description' => 'اپراتور با دسترسی به تولید',
            'status' => 'active',
            'permissions' => json_encode([
                'view_dashboard' => true,
                'manage_orders' => true,
                'view_reports' => true,
                'manage_production' => true,
            ]),
            'sub_role' => 'production',
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );

    DB::table('roles')->updateOrInsert(
        ['name' => 'manager'],
        [
            'description' => 'مدیر با دسترسی به مدیریت تولید و سفارشات',
            'status' => 'active',
            'permissions' => json_encode([
                'view_dashboard' => true,
                'manage_orders' => true,
                'manage_production' => true,
                'view_reports' => true,
            ]),
            'sub_role' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    );
}

}

