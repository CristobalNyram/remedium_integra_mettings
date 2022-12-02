<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@remedium.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
            // 'remember_token'=>Str::ramdom(6)
        ])->assignRole('Super_admin');

        User::create([
            'name' => ' Admin',
            'email' => 'admin@remedium.com',
            // 'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
            // 'remember_token'=>Str::ramdom(6)

        ])->assignRole('Admin');

        User::create([
            'name' => ' User',
            'email' => 'user@remedium.com',
            //'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'updated_at' => now(),
            // 'remember_token'=>Str::ramdom(6)

        ])->assignRole('User');
    }
}
