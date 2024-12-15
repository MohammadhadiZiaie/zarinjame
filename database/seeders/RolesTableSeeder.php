<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'نقش ادمین با دسترسی کامل',
            'status' => 'active',
            'parent_role_id' => null,
            'permissions' => json_encode(['create', 'read', 'update', 'delete']),
            'sub_roles' => json_encode(['admin_main']),
        ]);

        Role::create([
            'name' => 'operator',
            'description' => 'نقش اپراتور با دسترسی محدود',
            'status' => 'active',
            'parent_role_id' => null,
            'permissions' => json_encode(['read', 'update']),
            'sub_roles' => json_encode(['operator_cutting', 'operator_production']),
        ]);

        Role::create([
            'name' => 'manager',
            'description' => 'نقش مدیر با دسترسی‌های مدیریتی',
            'status' => 'active',
            'parent_role_id' => null,
            'permissions' => json_encode(['read', 'update', 'delete']),
            'sub_roles' => json_encode(['manager_production', 'manager_finance', 'manager_quality']),
        ]);

        Role::create([
            'name' => 'operator_cutting',
            'description' => 'نقش اپراتور دوخت',
            'status' => 'active',
            'parent_role_id' => 2,
            'permissions' => json_encode(['read', 'update', 'cutting_process']),
            'sub_roles' => json_encode([]),
        ]);

        Role::create([
            'name' => 'operator_production',
            'description' => 'نقش اپراتور تولید',
            'status' => 'active',
            'parent_role_id' => 2,
            'permissions' => json_encode(['read', 'update', 'production_process']),
            'sub_roles' => json_encode([]),
        ]);
    }
}
