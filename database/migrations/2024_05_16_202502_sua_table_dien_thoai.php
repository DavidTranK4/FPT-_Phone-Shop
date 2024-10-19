<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->text('baiViet')->nullable();
            $table->string('ghiChu',500)->nullable();
            $table->unsignedBigInteger('idLoai');
            $table->foreign('idLoai')->references('id')->on('loaiSP');
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
