<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Khoản chi không xác định',
        ]);
        DB::table('categories')->insert([
            'name' => 'Chuyển tài khoản',
        ]);
        DB::table('categories')->insert([
            'name' => 'Chi phí ăn uống',
        ]);
        DB::table('categories')->insert([
            'name' => 'Chi phí sinh hoạt',
        ]);
        DB::table('categories')->insert([
            'name' => 'Chi phí đi lại',
        ]);
        DB::table('categories')->insert([
            'name' => 'Phí thường niên',
        ]);
        DB::table('categories')->insert([
            'name' => 'Phát sinh',
        ]);
    }
}
