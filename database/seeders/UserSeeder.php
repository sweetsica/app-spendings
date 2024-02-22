<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'sweetsica',
            'name' => 'Ngọc Bảo',
            'email' => 'admin@sweetsica.com',
            'password' => Hash::make('tieuhoa195')
        ]);
        DB::table('users')->insert([
            'username' => 'halazy94',
            'name' => 'Vũ Hà',
            'email' => 'vuha7394@gmail.com',
            'password' => Hash::make('Hakute94')
        ]);
    }
}
