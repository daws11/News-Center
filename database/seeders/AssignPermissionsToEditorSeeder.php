<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignPermissionsToEditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Find or create the editor role
        $editorRole = Role::firstOrCreate(['name' => 'Editor']);

        // Define the permissions
        $permissions = [
            'Create News',
            'Update News',
            'Status News',
            'Update Status News'
        ];

        // Assign the permissions to the editor role
        foreach ($permissions as $permission) {
            $perm = Permission::firstOrCreate(['name' => $permission]);
            $editorRole->givePermissionTo($perm);
        }
    }
}