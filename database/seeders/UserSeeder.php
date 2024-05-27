<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Reia Samantha',
                'email' => 'reia.samantha@email.com',
                'password' => bcrypt('password'), // Ganti dengan password yang sesuai
                'type' => 0, // 0 untuk tenant
            ],
            [
                'name' => 'Sitha cleora',
                'email' => 'sitha.cleora@email.com',
                'password' => bcrypt('password'), // Ganti dengan password yang sesuai
                'type' => 0, // 0 untuk tenant
            ],
            [
                'name' => 'Adi Pratama',
                'email' => 'adi.pratama@email.com',
                'password' => bcrypt('password'), // Ganti dengan password yang sesuai
                'type' => 0, // 0 untuk tenant
            ],
            [
                'name' => 'Rico Fabian',
                'email' => 'rico.fabian@email.com',
                'password' => bcrypt('password'), // Ganti dengan password yang sesuai
                'type' => 0, // 0 untuk tenant
            ],
            [
                'name' => 'Rizal Eroza',
                'email' => 'rizal.eroza@email.com',
                'password' => bcrypt('password'), // Ganti dengan password yang sesuai
                'type' => 0, // 0 untuk tenant
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123'), // Ganti dengan password yang sesuai
                'type' => 1, // 1 untuk admin
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
