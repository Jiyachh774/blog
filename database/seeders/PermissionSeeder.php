<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Permission::truncate();
        Schema::enableForeignKeyConstraints();

        $permissions = [
            ['name' => 'profile.view', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'dashboard.view', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],

            //User Permissions
            ['name' => 'user.add', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'user.update', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'user.delete', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'user.view', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],

            //Role Permissions
            ['name' => 'role.add', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'role.update', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'role.delete', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
            ['name' => 'role.view', 'guard_name' => 'web', 'created_at' => now(), 'updated_at' => null],
        ];
        Permission::insert($permissions);
    }
}
