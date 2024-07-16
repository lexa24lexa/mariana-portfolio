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
        $creator = User::create([
            'name' => 'creator',
            'email' => 'mariana@gmail.com',
            'password' => bcrypt('olaola24!'),
            'remember_token' => 'ADsdkfkAismf',
        ])->assignRole('creator');
    }
}
