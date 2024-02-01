<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line



class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('roles')->insert([
        ['name' => 'admin'],
        ['name' => 'user'],
        // Add more roles as needed
    ]);
}
}
