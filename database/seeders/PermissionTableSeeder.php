<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    public function run(): void
    {
        // Create permissions
        Permission::firstOrCreate(['name' => 'write-a-post']);
        Permission::firstOrCreate(['name' => 'edit-a-post']);
        Permission::firstOrCreate(['name' => 'delete-a-post']);

        // Create roles
        $superAdmin = Role::firstOrCreate(['name' => 'SuperAdmin']);
        $admin = Role::firstOrCreate(['name' => 'Admin']);

        // Give permissions to certain roles
        $superAdmin->givePermissionTo(['write-a-post', 'edit-a-post', 'delete-a-post']);
        $admin->givePermissionTo(['write-a-post']);

        // Assign roles to users
        User::find(1)->assignRole('SuperAdmin');
        User::find(2)->assignRole('Admin');
    }
}
