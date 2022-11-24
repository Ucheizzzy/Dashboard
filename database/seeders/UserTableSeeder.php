<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // admin
            [
            'name' => 'Admin',
            'username'=>'admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make(123445678),
            'role'=>'admin',
            'status'=>'active',
            ],
            [
                // user
            'name' => 'User',
            'username'=>'user',
            'email'=> 'user@gmail.com',
            'password'=> Hash::make(123445678),
            'role'=>'user',
            'status'=>'active',

            ]

        ]);
    }
}
