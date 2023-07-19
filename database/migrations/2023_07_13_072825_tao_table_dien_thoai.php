<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*
            id (integer , primary key, increament )
        ▪ tenDT (string, 30, duy nhất không được trùng)
        ▪ moTa (string, 1000, nullable)
        ▪ ngayCapNhat (DateTime)
        ▪ gia (double 8,2)
        ▪ giaKM(double 8,2 , default =0)
        ▪ urlHinh (string, 200, nullable)
        ▪ soLuongTonKho (integer, default=0)
        ▪ hot (boolean, default =0)
        ▪ anHien (boolean, default=1)
    */
    public function up(){
        Schema::create('dienthoai2', function (Blueprint $table) {
            $table->id();
            $table->string('tenDT',30)->unique();
            $table->string('moTa',1000)->nullable();
            $table->string('ngayCapNhat',30);
            $table->double('gia',8,2);
            $table->double('giaKM',8,2)->default(0);
            $table->string('urlHinh',200)->nullable();
            $table->integer('soLuongTonKho')->default(0);
            $table->boolean('hot')->default(0);
            $table->boolean('anHien')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dienthoai');
    }
};
