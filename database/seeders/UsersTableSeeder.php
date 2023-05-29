<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('unitopadmin'),
                'role' => 'admin',

            ],

            [
                'name' => 'Agent',
                'username' => 'Agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('unitopagent'),
                'role' => 'agent',

            ],

            [
                'name' => 'Agent2',
                'username' => 'Agent',
                'email' => 'agent2@gmail.com',
                'password' => Hash::make('unitopagent'),
                'role' => 'agent',

            ],
        ]);
    }
}
