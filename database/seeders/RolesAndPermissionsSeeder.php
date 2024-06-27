<?php

namespace Database\Seeders;

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
        // Define permissions
        $permissions = [
            'create-post',
            'edit-post',
            'delete-post',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        // Create role
        $creator = Role::create(['name' => 'creator', 'guard_name' => 'web']);

        // Assign permissions to role
        $creator->givePermissionTo($permissions);
    }
}
