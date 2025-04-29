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
        User::create(['name' => 'user','email' =>'user4546@gmail.com','password' => 'user4546']);
        User::create(['name' => 'silvia','email' =>'silvia344@gmail.com','password' => 'silvia344']);
       
    }
}
