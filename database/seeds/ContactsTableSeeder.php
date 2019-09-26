<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->truncate();
        DB::table('contacts')->insert([
            [
              'id'=> 1,
              'c_name'=> 'Hoàng Tất Thành',
              'c_email'=> 'boycodon9x@gmail.com',
              'c_content'=> 'Shop có nhận nhà phân phối không ạ?',
            ],
            [
                'id'=> 2,
                'c_name'=> 'Nguyễn Thanh Hoa',
                'c_email'=> 'girlcodon10x@gmail.com',
                'c_content'=> 'Shop bán đồ đẹp quá, tiện ích, bảo vệ môi trường!!!',
            ],
            [
                'id'=> 3,
                'c_name'=> 'Nguyễn Tuấn Anh',
                'c_email'=> 'girlcodon_tim_boycungthe@gmail.com',
                'c_content'=> 'Học Lập Trình Đến Ngay FPT Aptech',
            ],
            [
                'id'=> 4,
                'c_name'=> 'Đặng Tiểu Bình',
                'c_email'=> 'TapCanBinh@gmail.com',
                'c_content'=> 'Đồ đẹp, độc đáo, mới lạ',
            ],
            [
                'id'=> 5,
                'c_name'=> 'Huấn Hoa Hồng',
                'c_email'=> 'huanhoahong@gmail.com',
                'c_content'=> 'Đi tù rồi cậu Bảnh ạ',
            ],
            [
                'id'=> 6,
                'c_name'=> 'Khá Bảnh',
                'c_email'=> 'khabanh9x@gmail.com',
                'c_content'=> 'Vâng anh',
            ],
        ]);
    }
}
