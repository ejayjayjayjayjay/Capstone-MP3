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
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',

            ],

            [
                'first_name' => 'Agent',
                'last_name' => 'Agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'agent',

            ],

            [
                'first_name' => 'Agent2',
                'last_name' => 'Agent',
                'email' => 'agent2@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'agent',

            ],
        ]);
    }
}
