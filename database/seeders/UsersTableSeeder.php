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
                'role' => 'admin',
                'first_name' => 'Admin',
                'last_name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),

            ],

            [
                'role' => 'agent',
                'first_name' => 'agent1',
                'last_name' => 'agent1',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('111'),
            ],

        ]);
    }
}
