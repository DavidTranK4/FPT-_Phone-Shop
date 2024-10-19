<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {
    public function run(): void
    {
        //chèn bảng users
        DB::table('users')->insert([
        [ 'name' => 'Đỗ Đạt Cao', 'password' => bcrypt('hehe') , 'dia_chi'=>'',
            'email' => 'dodatcao@gmail.com','dien_thoai' => '0918765238',
            'hinh' => '','role' => 1 ], 
        [ 'name' => 'Mai Anh Tới', 'password' => bcrypt('hehe') ,'dia_chi'=>'',
            'email' => 'maianhtoi@gmail.com','dien_thoai' => '098532482',
            'hinh' => '','role' => 0 ],
        [ 'name' => 'Đào Kho Báu', 'password' => bcrypt('hehe') ,'dia_chi'=>'',
            'email' => 'daokhobau@gmail.com','dien_thoai' => '097397392',
            'hinh' => '','role' => 1]
        ]);
       
    }//run
}//class
