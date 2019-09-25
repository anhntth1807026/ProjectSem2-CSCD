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
        DB::table('orders')->truncate();
        DB::table('orders')->insert(
            [
                [
                    'id' => 1,
                    'or_transaction_id' => 1,
                    'or_product_id' => 1,
                    'or_quantity' => 1,
                    'or_price' => 79000,
                    'created_at' => '2019-09-24 21:30:42',
                    'updated_at' => '2019-09-24 21:30:42',
                ],
                [
                    'id' => 2,
                    'or_transaction_id' => 2,
                    'or_product_id' => 4,
                    'or_quantity' => 3,
                    'or_price' => 79000,
                    'created_at' => '2019-09-24 21:30:42',
                    'updated_at' => '2019-09-24 21:30:42',
                ]
            ]
        );
    }
}
