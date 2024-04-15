<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'no_telp' => '0881245685949',
            'password' => bcrypt('admin123'),
            'address' => 'DKI Jakarta',
            'role' => 'admin',
            'division' => 'HR'
        ]);
    }
}
