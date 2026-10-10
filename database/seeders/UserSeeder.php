<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Enums\UserStatus;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $this->admin();
        $this->user();
    }
    protected function admin(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@domain.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'status' => UserStatus::Active,
            'updated_at' => null,
        ])->assignRole('admin');
    }

    protected function user(): void
    {
        User::create([
            'first_name' => 'New',
            'last_name' => 'User',
            'email' => 'user@domain.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'status' => UserStatus::Active,
            'updated_at' => null,
        ])->assignRole('user');
    }
}
