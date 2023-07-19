<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class chendienthoai extends Seeder
{
    /*Tạo seeder chèn 300 bộ dữ liệu sản phẩm điện thoại, mỗi bộ lấy 3 tên Oppo XA,
Iphone xs Max, Nokia Pro làm cơ sở để phát sinh dữ liệu. Giá của Oppo tạo ngẫu
nhiên từ 700000 đến 1000000, Iphone xs max từ 500000 đến 800000, Nokia Pro
từ 250000 đến 500000. Các giá trị khác phát sinh tùy ý.
     */
    public function run(): void
    {
        for($i=0;$i<300;$i++){
            DB::table('dienthoai2')->insert([
                ['tenDT'=>'Oppo XA' . $i,'gia'=>rand(700000,1000000),'ngayCapNhat'=>Now(),'idLoai'=>2],
                ['tenDT'=>'Iphone xs Max' . $i,'gia'=>rand(500000,800000),'ngayCapNhat'=>Now(),'idLoai'=>1],
                ['tenDT'=>'Nokia Pro' . $i,'gia'=>rand(250000,500000),'ngayCapNhat'=>Now(),'idLoai'=>3]
            ]);
        }
    }
}
