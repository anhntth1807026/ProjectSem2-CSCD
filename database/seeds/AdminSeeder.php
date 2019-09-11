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
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'thanh@gmail.com',
                'password' => bcrypt('admin'),
                'age' => 15,
                'address' => 'Hn',
                'phone' => '0133546879',
                'gender' => 'Nam'
            ],
            [
                'id' => 2,
                'name' => 'admin2',
                'email' => 'bach@gmail.com',
                'password' => bcrypt('admin'),
                'age' => 19,
                'address' => 'Ha Noi',
                'phone' => '0155469874',
                'gender' => 'Nam'
            ],
            [
                'id' => 3,
                'name' => 'admin3',
                'email' => 'hoa@gmail.com',
                'password' => bcrypt('admin'),
                'age' => 18,
                'address' => 'Thai Binh',
                'phone' => '0155424569',
                'gender' => 'Nu'
            ],
            [
                'id' => 4,
                'name' => 'admin4',
                'email' => 'tuananh@gmail.com',
                'password' => bcrypt('admin'),
                'age' => 16,
                'address' => 'Nam Dinh',
                'phone' => '0155422000',
                'gender' => 'Nam'
            ],
        ]);
    }
}
