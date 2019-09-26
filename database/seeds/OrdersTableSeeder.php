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
                'created_at' => '2019-09-24 21:30:42',
                'updated_at' => '2019-09-24 21:30:42',
            ],
            [
                'id'=> 2,
                'or_transaction_id'=> 2,
                'or_product_id'=> 2,
                'or_quantity'=> 3,
                'or_price'=> 57000,
                'created_at' => '2019-09-23 19:30:42',
                'updated_at' => '2019-09-23 19:30:42',
            ],
            [
                'id'=> 3,
                'or_transaction_id'=> 3,
                'or_product_id'=> 4,
                'or_quantity'=> 1,
                'or_price'=> 39000,
                'created_at' => '2019-09-22 19:30:42',
                'updated_at' => '2019-09-22 19:30:42',
            ],
            [
                'id'=> 4,
                'or_transaction_id'=> 4,
                'or_product_id'=> 6,
                'or_quantity'=> 1,
                'or_price'=> 79000,
                'created_at' => '2019-09-21 19:30:42',
                'updated_at' => '2019-09-21 19:30:42',
            ],
            [
                'id'=> 5,
                'or_transaction_id'=> 5,
                'or_product_id'=> 7,
                'or_quantity'=> 2,
                'or_price'=> 190000,
                'created_at' => '2019-09-20 19:30:42',
                'updated_at' => '2019-09-20 19:30:42',
            ],
            [
                'id'=> 6,
                'or_transaction_id'=> 6,
                'or_product_id'=> 8,
                'or_quantity'=> 1,
                'or_price'=> 115000,
                'created_at' => '2019-09-19 19:30:42',
                'updated_at' => '2019-09-19 19:30:42',
            ],
            [
                'id'=> 7,
                'or_transaction_id'=> 7,
                'or_product_id'=> 10,
                'or_quantity'=> 1,
                'or_price'=> 429000,
                'created_at' => '2019-09-25 19:30:42',
                'updated_at' => '2019-09-25 19:30:42',
            ],
            [
                'id'=> 8,
                'or_transaction_id'=> 8,
                'or_product_id'=> 42,
                'or_quantity'=> 1,
                'or_price'=> 79000,
                'created_at' => '2019-09-23 14:30:42',
                'updated_at' => '2019-09-23 14:30:42',
            ],
            [
                'id'=> 9,
                'or_transaction_id'=> 9,
                'or_product_id'=> 44,
                'or_quantity'=> 1,
                'or_price'=> 319000,
                'created_at' => '2019-09-22 14:30:42',
                'updated_at' => '2019-09-22 14:30:42',
            ],
            [
                'id'=> 10,
                'or_transaction_id'=> 10,
                'or_product_id'=> 45,
                'or_quantity'=> 1,
                'or_price'=> 499000,
                'created_at' => '2019-09-24 14:30:42',
                'updated_at' => '2019-09-24 14:30:42',
            ],
        ]);
    }
}
