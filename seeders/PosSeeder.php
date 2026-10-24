<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'LeBron James',
                'email' => 'kingjames@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Kevin Durant',
                'email' => 'slimreaper@example.com',
                'phone' => '09181234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Steph Curry',
                'email' => 'chefcurry@example.com',
                'phone' => '09191234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Kawhi Leonard',
                'email' => 'theklaw@example.com',
                'phone' => '09201234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'James Harden',
                'email' => 'thebeard@example.com',
                'phone' => '09211234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'System Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Cashier One',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Cashier Two',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'manager',
                'full_name' => 'Store Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Store Staff',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}