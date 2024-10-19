<?php

namespace Database\Seeders;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class chenThanhVien extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $ho =['Nguyễn','Trần','lê','Lý','Ngụy','Đỗ','Võ','Bùi','Hồ'];
        // $lot =['Thế','Chí','Văn','Thị','Tôn','Mỹ','Trung','Thập','Bá'];
        // $ten =['Kiên','Thảo','Vỹ','Minh','Vỹ','Nhi','Ninh','Kim','Long'];
        // for ($i=0; $i <100 ; $i++) { 
        //     $ht = Arr::random($ho). ' ' . Arr::random($lot). ' ' . Arr::random($ten);
        //     DB::table('thanhvien')->insert([
        //     'hoTen'=>$ht,
        //     'email'=>Str::random(5).'@gmail.com',
        //     'password'=> bcrypt('hehe')
        //     ]);
        // }
    }
}
