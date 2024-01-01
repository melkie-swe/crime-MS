<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            SuperAdminSeeder::class,
        ]);


        // DB::table('users')->insert([
        //     'username' => 'admin',
        //     'firstname' => 'Admin',
        //     'lastname' => 'Admin',
        //     'email' => 'admin@argon.com',
        //     'password' => bcrypt('secret')
        // ]);
        // DB::table('users')->insert([
        //     'username' => 'teka',
        //     'firstname' => 'teka',
        //     'lastname' => 'teka',
        //     'email' => 'teka@argon.com',
        //     'password' => bcrypt('teka')
        // ]);
    }
}
