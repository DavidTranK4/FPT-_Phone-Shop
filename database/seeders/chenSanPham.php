<?php

namespace Database\Seeders;
use Illuminate\Support\Arr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class chenSanPham extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {     
        $hinh_arr= [
            '/image/1.jpg',
            '/image/2.jpg',
            '/image/3.jpg',
            '/image/4.jpg',
            '/image/5.jpg',
            '/image/6.jpg',
            '/image/7.jpg',
            '/image/8.jpg',
            '/image/9.jpg',
            '/image/10.jpg',
            '/image/11.jpg',
            '/image/12.jpg',
            '/image/13.jpg',
            '/image/14.jpg',
            '/image/15.jpg',
            '/image/16.jpg',
            '/image/17.jpg',
            '/image/18.jpg',
            '/image/19.jpg',
            '/image/20.jpg',
            '/image/22.jpg',
            '/image/23.jpg',
            '/image/24.jpg',
            '/image/25.jpg',
            '/image/26.jpg',
            '/image/27.jpg',
            '/image/28.jpg',
            '/image/29.jpg',
            '/image/30.jpg',
        ];
        $mota_arr=[
            'iPhone 15 và iPhone 15 Plus thể hiện một bước nhảy vọt lớn với những cải tiến tuyệt vời về camera mang đến cảm hứng sáng tạo, Dynamic Island trực quan cùng các tính năng như Roadside Assistance thông qua vệ tinh tạo ra sự khác biệt lớn trong cuộc sống của người dùng,” Kaiann Drance, Phó Chủ tịch bộ phận Tiếp thị Sản phẩm iPhone Toàn cầu của Apple chia sẻ.',

            'Đầu tiên đến chiếc điện thoại cao cấp nhất, OPPO Find X6 Pro, sản phẩm được hãng mệnh danh mở ra kỷ nguyên mới với 3 camera chính. Bộ 3 camera ở mặt lưng của OPPO Find X6 Pro được trang bị cảm biến lớn nhất từ trước đến nay trên các thiết bị điện thoại thông minh.cũng là phiên bản lớn nhất từng được sử dụng trên điện thoại. Cuối cùng ống kính tiềm vọng với cảm biến IMX890 1/1.56 inch 65mm f/2.6 có hỗ trợ OIS.   
            ',

            'Là chiếc điện thoại sắc nét và có camera tuyệt đỉnh với độ phân giải MP cao nhất và được hỗ trợ khả năng xử lý AI, Galaxy S24 Ultra thiết lập một tiêu chuẩn mới cho chất lượng hình ảnh mỗi khi bạn chụp. Không chỉ thế, công nghệ ProVisual còn có thể nhận diện vật thể và nâng cao chất lượng - cải thiện tông màu, giảm nhiễu và làm sắc nét hình ảnh.',

            'Ngoài thiết kế lạ mắt thì iPhone 11 Pro Max sở hữu màn hình đáng tiền, với kích thước 6.5 inch cùng tấm nền OLED được tinh chỉnh lại bởi Apple. Màn hình này còn được hỗ trợ công nghệ True Tone giúp điều chỉnh cân bằng trắng sao cho phù hợp với điều kiện ánh sáng xung quanh.
            Tuy nhiên, màn hình OLED mới này dường như bị ám vàng khi hiển thị màu trắng hoặc hình ảnh. Những màu này không xuất hiện khi hình ảnh được hiển thị trên màn hình máy tính.',
    ];
            for ($i=0; $i <50 ; $i++) { 
            DB::table('dienthoai')->insert([
                [
                    'TenDT'=>'iphone' .$i,
                    'urlHinh'=>Arr::random($hinh_arr),
                     'ngayCapNhat'=>now(),
                    'gia'=>mt_rand(70000,100000),
                    'anHien'=>mt_rand(0,1),
                    'baiViet'=>Arr::random($mota_arr),
                    'idLoai'=>mt_rand(1,6)
                ], 
                [
                'TenDT'=>'OppoXa' .$i,
                'urlHinh'=>Arr::random($hinh_arr),
                 'ngayCapNhat'=>now(),
                'gia'=>mt_rand(70000,100000),
                'anHien'=>mt_rand(0,1),
                'baiViet'=>Arr::random($mota_arr),
                'idLoai'=>mt_rand(1,6)
                ],
                [
                'TenDT'=>'SamSung' .$i,
                'urlHinh'=>Arr::random($hinh_arr),
                 'ngayCapNhat'=>now(),
                'gia'=>mt_rand(70000,100000),
                'anHien'=>mt_rand(0,1),
                'baiViet'=>Arr::random($mota_arr),
                'idLoai'=>mt_rand(1,6)
                ], 
            ]
              
                );
        }
    }
}
