<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'user_id' => '1',
            'name' => 'Vietcombank',
            'amount' => 10000000,
            'total'=>10000000
        ]);
        DB::table('users')->insert([
            'user_id' => '1',
            'name' => 'VPBank',
            'amount' => 5000000,
            'total'=>5000000
        ]);
        DB::table('users')->insert([
            'user_id' => '1',
            'name' => 'TP Bank',
            'amount' => 5000000,
            'total'=>5000000
        ]);
    }
}
