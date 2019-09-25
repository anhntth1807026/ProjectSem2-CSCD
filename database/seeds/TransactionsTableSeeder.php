<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transactions')->truncate();
        DB::table('transactions')->insert([
            [
                'id'=> 1,
                'tr_user_id'=> 1,
                'tr_total'=> 136000,
                'tr_note'=> 'Chỉ nhận hàng lúc thứ 2-4-6 lúc 19h30 !',
                'tr_address'=> 'Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội',
                'tr_phone'=> '0165478912',
                'tr_status'=> 1,
                'created_at'=> '2018-01-21 21:30:42',
                'updated_at'=> '2018-01-21 21:30:42',
            ],
            [
                'id'=> 2,
                'tr_user_id'=> 2,
                'tr_total'=> 57000,
                'tr_note'=> 'Ship lúc 22 giờ bonus 50k',
                'tr_address'=> 'Ngõ 5, Hồ Tùng Mậu, Mỹ Đình, Hà Nội',
                'tr_phone'=> '0165632781',
                'tr_status'=> 1,
                'created_at'=> '2018-07-12 19:30:42',
                'updated_at'=> '2018-07-12 19:30:42',
            ],
            [
                'id'=> 3,
                'tr_user_id'=> 3,
                'tr_total'=> 39000,
                'tr_note'=> 'Đường làng đang làm hơi bụi tí, shipper thông cảm.',
                'tr_address'=> 'Đội 7, Thụy Ứng, Hòa Bình, Hà Nội',
                'tr_phone'=> '0365458974',
                'tr_status'=> 1,
                'created_at'=> '2018-08-03 01:30:42',
                'updated_at'=> '2018-08-03 01:30:42',
            ],
            [
                'id'=> 4,
                'tr_user_id'=> 1,
                'tr_total'=> 79000,
                'tr_note'=> 'Yêu cầu xem hàng trước khi thanh toán.',
                'tr_address'=> 'Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội',
                'tr_phone'=> '0165478912',
                'tr_status'=> 1,
                'created_at'=> '2018-09-08 16:30:42',
                'updated_at'=> '2018-09-08 16:30:42',
            ],
            [
                'id'=> 5,
                'tr_user_id'=> 2,
                'tr_total'=> 190000,
                'tr_note'=> 'Đã thanh toán qua vnPay',
                'tr_address'=> 'Ngõ 5, Hồ Tùng Mậu, Mỹ Đình, Hà Nội',
                'tr_phone'=> '0165632781',
                'tr_status'=> 1,
                'created_at'=> '2018-10-15 23:30:42',
                'updated_at'=> '2018-10-15 23:30:42',
            ],
            [
                'id'=> 6,
                'tr_user_id'=> 3,
                'tr_total'=> 115000,
                'tr_note'=> 'Ship vào thứ 3-5-7',
                'tr_address'=> 'Đội 7, Thụy Ứng, Hòa Bình, Hà Nội',
                'tr_phone'=> '0365458974',
                'tr_status'=> 1,
                'created_at'=> '2018-11-13 19:30:42',
                'updated_at'=> '2018-11-13 19:30:42',
            ],
            [
                'id'=> 7,
                'tr_user_id'=> 1,
                'tr_total'=> 429000,
                'tr_note'=> 'Được kiểm tra sản phẩm trước khi nhận hàng',
                'tr_address'=> 'Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội',
                'tr_phone'=> '0165478912',
                'tr_status'=> 1,
                'created_at' => '2018-12-03 15:30:42',
                'updated_at' => '2018-12-03 15:30:42',
            ],
            [
                'id'=> 8,
                'tr_user_id'=> 2,
                'tr_total'=> 79000,
                'tr_note'=> 'Mua lần đầu',
                'tr_address'=> 'Ngõ 5, Hồ Tùng Mậu, Mỹ Đình, Hà Nội',
                'tr_phone'=> '0165632781',
                'tr_status'=> 0,
                'created_at' => '2019-01-08 14:30:42',
                'updated_at' => '2019-01-08 14:30:42',
            ],
            [
                'id'=> 9,
                'tr_user_id'=> 3,
                'tr_total'=> 319000,
                'tr_note'=> 'Mua lần thứ 2',
                'tr_address'=> 'Đội 7, Thụy Ứng, Hòa Bình, Hà Nội',
                'tr_phone'=> '0365458974',
                'tr_status'=> 0,
                'created_at' => '2019-02-18 22:30:42',
                'updated_at' => '2019-02-18 22:30:42',
            ],
            [
                'id'=> 10,
                'tr_user_id'=> 3,
                'tr_total'=> 499000,
                'tr_note'=> 'Mua lần thứ cuối',
                'tr_address'=> 'Đội 7, Thụy Ứng, Hòa Bình, Hà Nội',
                'tr_phone'=> '0365458974',
                'tr_status'=> 1,
                'created_at' => '2019-08-18 22:30:42',
                'updated_at' => '2019-08-18 22:30:42',
            ],

        ]);
    }
}
