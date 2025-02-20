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
        User::create(['name' => 'admin','email' =>'admin4546@gmail.com','status' => 'active', 'role' => 'admin','password' => 'admin4546']);
        User::create(['name' => 'staff','email' =>'staff2664@gmail.com','status' => 'active', 'role' => 'staff','password' => 'staff2664']);
    }
}
