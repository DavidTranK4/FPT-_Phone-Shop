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
            ['tenLoai'=>'Sam sung','thuTu'=>1,'anHien'=>1],
            ['tenLoai'=>'HTC','thuTu'=>2,'anHien'=>1],
            ['tenLoai'=>'apple','thuTu'=>3,'anHien'=>1],
            ['tenLoai'=>'LG','thuTu'=>4,'anHien'=>1],
            ['tenLoai'=>'acer','thuTu'=>5,'anHien'=>1],
            ['tenLoai'=>'dell','thuTu'=>6,'anHien'=>0],
        ]);
    }
}
