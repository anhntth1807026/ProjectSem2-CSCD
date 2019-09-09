<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'thanh@gmail.com',
            'password' => bcrypt('admins'),
            'age' => 15,
            'address' => 'Hn',
            'phone' => 55656,
            'gender' => 'Nam'
        ]);
    }
}
