<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class chenLoaisp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaisp')->insert([
            ['tenLoai'=>'Samsung','thuTu'=>'1','anHien'=>1],
            ['tenLoai'=>'Apple','thuTu'=>'2','anHien'=>1],
            ['tenLoai'=>'Oppo','thuTu'=>'3','anHien'=>1],
            ['tenLoai'=>'Xiaomi','thuTu'=>'4','anHien'=>1],
            ['tenLoai'=>'Vivo','thuTu'=>'5','anHien'=>1],
            ['tenLoai'=>'Realme','thuTu'=>'6','anHien'=>1],
            ['tenLoai'=>'Nokia','thuTu'=>'7','anHien'=>1],
            ['tenLoai'=>'Vsmart','thuTu'=>'8','anHien'=>1],
            ['tenLoai'=>'Itel','thuTu'=>'9','anHien'=>1],
            ['tenLoai'=>'Masstel','thuTu'=>'10','anHien'=>1],
            ['tenLoai'=>'Mobell','thuTu'=>'11','anHien'=>1],
            ['tenLoai'=>'Coolpad','thuTu'=>'12','anHien'=>0],
            ['tenLoai'=>'Blackberry','thuTu'=>'13','anHien'=>1],
            ['tenLoai'=>'Philips','thuTu'=>'14','anHien'=>1],
            ['tenLoai'=>'Mobiistar','thuTu'=>'15','anHien'=>1],
            ['tenLoai'=>'Bphone','thuTu'=>'16','anHien'=>1],
            ['tenLoai'=>'Asus','thuTu'=>'17','anHien'=>0],
            ['tenLoai'=>'Huawei','thuTu'=>'18','anHien'=>1],
            ['tenLoai'=>'HTC','thuTu'=>'19','anHien'=>1],
            ['tenLoai'=>'Lenovo','thuTu'=>'20','anHien'=>1],
            ['tenLoai'=>'Motorola','thuTu'=>'21','anHien'=>1],
            ['tenLoai'=>'OnePlus','thuTu'=>'22','anHien'=>0],
            ['tenLoai'=>'Sony','thuTu'=>'23','anHien'=>0],
            ['tenLoai'=>'Vinsmart','thuTu'=>'24','anHien'=>1]
        ]);
    }
}
