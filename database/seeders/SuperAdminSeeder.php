<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Creating Super Admin User
         $superAdmin = User::create([
            'username' => 'SuperAdmin', 
            'email' => 'superAdmin@tewos.com',
            // 'password' => Hash::make('javed1234')
            'password' => bcrypt('SuperAdmin')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'username' => 'admin', 
            'email' => 'admin@tewos.com',
            // 'password' => Hash::make('ahsan1234')
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'username' => 'productManager', 
            'email' => 'productManager@tewos.com',
            // 'password' => Hash::make('muqeet1234')
            'password' => bcrypt('productManager')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
