<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    // Create an admin user
    \App\Models\User::factory()->create([
        'name' => 'Arnold Masmini',
        'email' => 'andesminoldy@gmail.com',
        'password' => bcrypt('andrew12345'),
        'role' => 'admin', // Set the role to 'admin'
    ]);

    // Create additional users as needed
}
}
