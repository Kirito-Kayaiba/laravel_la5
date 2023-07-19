<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /*     ▪ id(integer, primary key, increament),
    // ▪ hoTen(string, 100),
    // ▪ password (string, 100)
    // ▪ email (string , 200)
    // ▪ randomKey(string, 100, nullable)
    // ▪ active(boolean, default = 0)
     ▪ idGroup(integer, default =0) */
    public function up(): void
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->id();
            $table->string('hoTen', 100);
            $table->string('password', 100);
            $table->string('email', 200);
            $table->string('randomKey', 100)->nullable();
            $table->boolean('active')->default(0);
            $table->integer('idGroup')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanhvien');
    }
};
