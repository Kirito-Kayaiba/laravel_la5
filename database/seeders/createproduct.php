<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class createproduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // thêm dữ liệu vào bảng products
        \DB::table('products')->insert([
            ['tenSP' => 'Iphone 12', 'gia' => 20000000, 'anHien' => 1],
            ['tenSP' => 'Iphone 12 Pro', 'gia' => 30000000, 'anHien' => 1],
            ['tenSP' => 'Iphone 12 Pro Max', 'gia' => 40000000, 'anHien' => 1],
            ['tenSP' => 'Iphone 12 Mini', 'gia' => 10000000, 'anHien' => 1],
        ]);
    }

}
