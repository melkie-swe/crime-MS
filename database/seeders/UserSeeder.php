<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Create Sample Dummy Users Array
          $users = [
            [
                'username' => 'melkie',
                'firstname' => 'melkie',
                'lastname' => 'kindie',
                'email' => 'melkie@argon.com',
                'password' => bcrypt('melkie')
                // 'password'=> Hash::make('melkie')

            ],
            [
                'username' => 'teka',
                'firstname' => 'teka',
                'lastname' => 'defar',
                'email' => 'teka@argon.com',
                'password' => bcrypt('teka')
            ],
            [
                'username' => 'bethe',
                'firstname' => 'bethe',
                'lastname' => 'asrat',
                'email' => 'bethe@argon.com',
                'password' => bcrypt('bethe')
            ],
            [
                'username' => 'azi',
                'firstname' => 'azi',
                'lastname' => 'aschale',
                'email' => 'azi@argon.com',
                'password' => bcrypt('azi')
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($users as $user){
            User::create($user);
        }
    }
}
