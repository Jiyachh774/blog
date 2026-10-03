<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        Role::create(['name' => 'super_admin', 'guard_name' => 'web', 'updated_at' => null]);
        Role::create(['name' => 'admin', 'guard_name' => 'web', 'updated_at' => null]);
        Role::create(['name' => 'user', 'guard_name' => 'web', 'updated_at' => null]);
    }
}
