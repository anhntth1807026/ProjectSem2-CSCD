<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id'=> 1,
                'or_transaction_id'=> 1,
                'or_product_id'=> 1,
                'or_quantity'=> 1,
                'or_price'=> 79000,
                'created_at' => '2018-01-21 21:30:42',
                'updated_at' => '2018-01-21 21:30:42',
            ],
            [
                'id'=> 2,
                'or_transaction_id'=> 2,
                'or_product_id'=> 2,
                'or_quantity'=> 3,
                'or_price'=> 57000,
                'created_at' => '2018-07-12 19:30:42',
                'updated_at' => '2018-07-12 19:30:42',
            ],
            [
                'id'=> 3,
                'or_transaction_id'=> 3,
                'or_product_id'=> 4,
                'or_quantity'=> 1,
                'or_price'=> 39000,
                'created_at' => '2018-08-03 01:30:42',
                'updated_at' => '2018-08-03 01:30:42',
            ],
            [
                'id'=> 4,
                'or_transaction_id'=> 4,
                'or_product_id'=> 6,
                'or_quantity'=> 1,
                'or_price'=> 79000,
                'created_at' => '2018-09-08 16:30:42',
                'updated_at' => '2018-09-08 16:30:42',
            ],
            [
                'id'=> 5,
                'or_transaction_id'=> 5,
                'or_product_id'=> 7,
                'or_quantity'=> 2,
                'or_price'=> 190000,
                'created_at' => '2018-10-15 23:30:42',
                'updated_at' => '2018-10-15 23:30:42',
            ],
            [
                'id'=> 6,
                'or_transaction_id'=> 6,
                'or_product_id'=> 8,
                'or_quantity'=> 1,
                'or_price'=> 115000,
                'created_at' => '2018-11-13 19:30:42',
                'updated_at' => '2018-11-13 19:30:42',
            ],
            [
                'id'=> 7,
                'or_transaction_id'=> 7,
                'or_product_id'=> 10,
                'or_quantity'=> 1,
                'or_price'=> 429000,
                'created_at' => '2018-12-03 15:30:42',
                'updated_at' => '2018-12-03 15:30:42',
            ],
            [
                'id'=> 8,
                'or_transaction_id'=> 8,
                'or_product_id'=> 42,
                'or_quantity'=> 1,
                'or_price'=> 79000,
                'created_at' => '2019-01-08 14:30:42',
                'updated_at' => '2019-01-08 14:30:42',
            ],
            [
                'id'=> 9,
                'or_transaction_id'=> 9,
                'or_product_id'=> 44,
                'or_quantity'=> 1,
                'or_price'=> 319000,
                'created_at' => '2019-02-18 22:30:42',
                'updated_at' => '2019-02-18 22:30:42',
            ],
            [
                'id'=> 10,
                'or_transaction_id'=> 10,
                'or_product_id'=> 45,
                'or_quantity'=> 1,
                'or_price'=> 499000,
                'created_at' => '2019-08-18 22:30:42',
                'updated_at' => '2019-08-18 22:30:42',
            ],
        ]);
    }
}
