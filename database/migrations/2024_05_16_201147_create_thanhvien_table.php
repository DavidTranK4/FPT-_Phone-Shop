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
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hoTen',100);
            $table->string('passWord',200);
            $table->string('email',100);
            $table->string('ramdomKey',100)->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('idGroup')->default(0);

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
