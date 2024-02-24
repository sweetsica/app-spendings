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
            'bank_id' => '43',
            'name' => 'Vietcombank',
            'total'=>4464882
        ]);
        DB::table('sources')->insert([
            'user_id' => '1',
            'bank_id' => '47',
            'name' => 'VPBank',
            'total'=>3910881
        ]);
        DB::table('sources')->insert([
            'user_id' => '1',
            'bank_id' => '39',
            'name' => 'TP Bank',
            'total'=>61361
        ]);
        DB::table('sources')->insert([
            'user_id' => '1',
            'bank_id' => '64',
            'name' => 'MoMo',
            'total'=>0
        ]);
        DB::table('sources')->insert([
            'user_id' => '1',
            'bank_id' => '67',
            'name' => 'ShopeePay',
            'total'=>0
        ]);
    }
}
