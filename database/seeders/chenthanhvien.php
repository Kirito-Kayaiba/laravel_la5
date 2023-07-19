<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class chenthanhvien extends Seeder
{
    /*Chèn 100 user với họ tên ghép ngẫu nhiên các giá trị trong 3 dãy sau, mật
khẩu mã hóa từ chữ hehe. Các email phát sinh ngẫu nhiên và có domain
gmail.com.
     */
    public function run(): void
    {
        $ho = ['Nguyễn','Lê','Phan','Đỗ','Hồ','Võ','Đặng','Bùi','Đinh','Lý'];
        $tenDem = ['Thị','Văn','Đức','Thành','Hữu','Thế','Thi','Thảo','Hải','Hà'];
        $ten = ['Hương','Huy','Hùng','Hải','Hà','Hạnh','Hạ','Hào','Hậu','Hàm'];
        for($i=0;$i<100;$i++){
            $hovaten = $ho[rand(0,9)] . ' ' . $tenDem[rand(0,9)] . ' ' . $ten[rand(0,9)];
            $email = $ten[rand(0,9)] . $tenDem[rand(0,9)] . $ho[rand(0,9)] . '@gmail.com';
            $matKhau = bcrypt('hehe');
            DB::table('thanhvien')->insert([
                ['hoTen'=>$hovaten,'email'=>$email,'password'=>$matKhau]
            ]);
        }
    }
}
