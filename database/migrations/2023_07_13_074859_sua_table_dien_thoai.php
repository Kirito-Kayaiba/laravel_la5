<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /*
    - Thêm 3 field baiViet(text, nullable), ghiChu(string, 500, nullable), idLoai
(unsigned Big Integer) vào bảng dienthoai
- Khai báo khóa ngoại là idLoai để thiết lập quan hệ với bảng loaisp (field id )
     */
    public function up(): void
    {
        Schema::table('dienthoai2', function (Blueprint $table) {
            $table->text('baiViet')->nullable();
            $table->string('ghiChu', 500)->nullable();
            $table->unsignedBigInteger('idLoai');
            $table->foreign('idLoai')->references('id')->on('loaisp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            //
        });
    }
};
