<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'vendor']);
        Role::create(['name' => 'customer']);

        // Permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage services']);
        Permission::create(['name' => 'manage bookings']);
        Permission::create(['name' => 'book service']);
        Permission::create(['name' => 'accept booking']);
    }
}
