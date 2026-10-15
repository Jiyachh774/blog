<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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

        Role::create(['name' => UserRole::SuperAdmin->value, 'guard_name' => 'web', 'updated_at' => null])
            ->givePermissionTo(Permission::all());

        Role::create(['name' => UserRole::Admin->value, 'guard_name' => 'web', 'updated_at' => null])
            ->givePermissionTo([
                'profile.view',
                'dashboard.view',
            ]);

        Role::create(['name' => UserRole::User->value, 'guard_name' => 'web', 'updated_at' => null])
            ->givePermissionTo([
                'profile.view',
            ]);
    }
}
