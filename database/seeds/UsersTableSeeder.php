<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$M50Wg8n72D8clAPbQIFdA.MHUIRSQl6opHrxsF0dk3KngWKHAHWvi',
                'remember_token' => null,
                'created_at'     => '2019-09-12 08:39:23',
                'updated_at'     => '2019-09-12 08:39:23',
            ],
        ];

        User::insert($users);
    }
}
