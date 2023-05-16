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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'vincent',
            'email' => 'vincent@gmail.com',
            'password' => bcrypt('vincent'),
        ]);
        User::create([
            'name' => 'rucci',
            'email' => 'rucci@gmail.com',
            'password' => bcrypt('rucci'),
        ]);
        User::create([
            'name' => 'darren',
            'email' => 'darren@gmail.com',
            'password' => bcrypt('darren'),
        ]);
    }
}
