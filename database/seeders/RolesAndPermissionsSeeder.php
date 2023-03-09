<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tworzenie ról
        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Administrator role'
        ]);

        $userRole = Role::create([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'User role'
        ]);

        // Tworzenie uprawnień
        $createPermission = Permission::create([
            'name' => 'create',
            'display_name' => 'Create',
            'description' => 'Create permission'
        ]);

        $readPermission = Permission::create([
            'name' => 'read',
            'display_name' => 'Read',
            'description' => 'Read permission'
        ]);

        $updatePermission = Permission::create([
            'name' => 'update',
            'display_name' => 'Update',
            'description' => 'Update permission'
        ]);

        $deletePermission = Permission::create([
            'name' => 'delete',
            'display_name' => 'Delete',
            'description' => 'Delete permission'
        ]);

        // Przypisanie uprawnień do ról
        $adminRole->attachPermission($createPermission);
        $adminRole->attachPermission($readPermission);
        $adminRole->attachPermission($updatePermission);
        $adminRole->attachPermission($deletePermission);

        $userRole->attachPermission($readPermission);

        // Tworzenie użytkowników
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password')
        ]);

        // Przypisanie ról do użytkowników
        $admin->attachRole($adminRole);
        $user->attachRole($userRole);
    }
}
