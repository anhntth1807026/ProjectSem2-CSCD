<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->truncate();
        DB::table('transactions')->insert(
            [
                [
                    'id'=> 1,
                    'tr_user_id'=> 1,
                    'tr_total'=> 79000,
                    'tr_note'=> 'Chỉ nhận hàng lúc thứ 2-4-6 lúc 19h30 !',
                    'tr_address'=> 'Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội',
                    'tr_phone'=> '0165478912',
                    'tr_status'=> 1,
                    'created_at' => '2019-09-24 21:30:42',
                    'updated_at' => '2019-09-24 21:30:42',
                ],
//                [
//                    'id'=> 2,
//                    'tr_user_id'=> 2,
//                    'tr_total'=> 580000,
//                    'tr_note'=> 'Ship lúc 22 giờ bonus 50k',
//                    'tr_address'=> 'Ngõ 5, Hồ Tùng Mậu, Mỹ Đình, Hà Nội',
//                    'tr_phone'=> '0165478912',
//                    'tr_status'=> 0,
//                ]
            ]
        );
    }
}
