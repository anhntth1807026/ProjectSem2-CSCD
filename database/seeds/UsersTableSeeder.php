<?php

use Illuminate\Database\Seeder;

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
//        DB::table('users')->truncate();
//        DB::table('users')->insert([
//            [
//                'id' => '1',
//                'name' => 'Nguyen Van An',
//                'email' => 'nguyenvanan@gmail.com',
//                'password' => 'nguyenvanan',
//                'age' => '20',
//                'address' => 'Bac Ninh',
//                'phone' => '0165478912',
//                'gender' => 'nam',
//            ],
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
//            ],
//        ]);
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
    }
}
