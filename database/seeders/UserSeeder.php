<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), 
                'role' => 'admin',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@example.com',
                'password' => Hash::make('manager123'),
                'role' => 'manager',
            ],
            [
                'name' => 'Employee',
                'email' => 'employee@example.com',
                'password' => Hash::make('employee123'),
                'role' => 'operator',
            ],
            [
                'name' => 'Support',
                'email' => 'support@example.com',
                'password' => Hash::make('support123'),
                'role' => 'operator',
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@example.com',
                'password' => Hash::make('operator123'),
                'role' => 'operator',
            ],
        ]);
    }
}
