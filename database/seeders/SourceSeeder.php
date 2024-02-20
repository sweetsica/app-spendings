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
        DB::table('sources')->insert([
            'user_id' => '1',
            'name' => 'Vietcombank',
            'total'=>10000000
        ]);
        DB::table('sources')->insert([
            'user_id' => '1',
            'name' => 'VPBank',
            'total'=>5000000
        ]);
        DB::table('sources')->insert([
            'user_id' => '1',
            'name' => 'TP Bank',
            'total'=>5000000
        ]);
    }
}
