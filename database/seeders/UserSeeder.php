<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                "username" => "mirko",
                "email" => "mirko@gmail.com",
                "password" => "mirko123"
            ]
        ];

        foreach ($user as $userData) {
            $user = new User();
            $user->name = $userData['username'];
            $user->email = $userData['email'];
            $user->password = bcrypt($userData['password']);
            $user->save();
        }
    }
}