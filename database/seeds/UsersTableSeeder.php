<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'ADMIN IT',
                'email'          => 'adminit@puninar.com',
                'password'       => bcrypt('puninar123'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Manager',
                'email'          => 'manager@puninar.com',
                'password'       => bcrypt('puninar123'),
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'USER GLOBAL',
                'email'          => 'user@puninar.com',
                'password'       => bcrypt('puninar123'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}