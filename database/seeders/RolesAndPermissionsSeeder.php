<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create permissions
        DB::table('permissions')->insert([
            // ...
        ]);

        // Create roles
        DB::table('roles')->insert([
            ['name' => 'admin', 'display_name' => 'Administrator', 'description' => 'Administrator role'],
            ['name' => 'user', 'display_name' => 'User', 'description' => 'User role'],
        ]);

        // Assign permissions to roles
        DB::table('permission_role')->insert([
            // ...
        ]);

        // Assign roles to users
        DB::table('role_user')->insert([
            // ...
        ]);
    }
}
