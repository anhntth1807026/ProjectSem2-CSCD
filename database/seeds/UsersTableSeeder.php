<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = config('roles.models.role')::where('name', '=', 'User')->first();
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        $permissions = config('roles.models.permission')::all();
        /*
         * Add Users
         *
         */
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'id' => '1',
                'name' => 'Nguyen Van An',
                'email' => 'nguyenvanan@gmail.com',
                'password' => bcrypt('123456'),
                'age' => 20,
                'address' => 'Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội',
                'phone' => '0165478912',
                'gender' => 'Nam',
                'activation_code'=> '156927547115d892c257e8f9',
                'active'=> true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '2',
                'name' => 'Duong Van Bao',
                'email' => 'duongvanbao@gmail.com',
                'password' => bcrypt('123456'),
                'age' => 28,
                'address' => 'Ngõ 5, Hồ Tùng Mậu, Mỹ Đình, Hà Nội',
                'phone' => '0165632781',
                'gender' => 'Nam',
                'activation_code'=> '235927547115d892c257e8f9',
                'active'=> true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'name' => 'Tran Thi Chi',
                'email' => 'tranthichi@gmail.com',
                'password' => bcrypt('123456'),
                'age' => 23,
                'address' => 'Đội 7, Thụy Ứng, Hòa Bình, Hà Nội',
                'phone' => '0365458974',
                'gender' => 'Nữ',
                'activation_code'=> '235327547885d892c257e8f9',
                'active'=> true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

//            [
//                'id' => '2',
//                'name' => 'Duong Thi Anh',
//                'email' => 'duongthianh@gmail.com',
//                'password' => 'duongthianh',
//                'age' => '23',
//                'address' => 'Ha Tinh',
//                'phone' => '0168421578',
//                'gender' => 'nữ',
//            ],
//            [
//                'id' => '3',
//                'name' => 'Tran Anh Nam',
//                'email' => 'trananhnam@gmail.com',
//                'password' => 'trananhnam',
//                'age' => '29',
//                'address' => 'Bac Ninh',
//                'phone' => '0184655972',
//                'gender' => 'nam',
//        if (config('roles.models.defaultUser')::where('email', '=', 'admin@admin.com')->first() === null) {
//            $newUser = config('roles.models.defaultUser')::create([
//                'name'     => 'Admin',
//                'email'    => 'admin@admin.com',
//                'password' => bcrypt('password'),
//            ]);
//
//            $newUser->attachRole($adminRole);
//            foreach ($permissions as $permission) {
//                $newUser->attachPermission($permission);
//            }
//        }

//        if (config('roles.models.defaultUser')::where('email', '=', 'email@email.com')->first() === null) {
//            $newUser = config('roles.models.defaultUser')::create([
//                'name'     => 'User',
//                'email'    => 'email@email.com',
//                'password' => bcrypt('password'),
//            ]);
//
//            $newUser;
//            $newUser->attachRole($userRole);
//        }
        DB::statement("ALTER SEQUENCE users_id_seq RESTART 4");
    }
}
