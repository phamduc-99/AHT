<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert(
            [
                'email' => 'admin@gmail.com', 'password'=>Hash::make('123456'), 'fullname' => 'Nguyen van A','address' => 'Số 5 ngõ 114 Miếu Đầm', 'phone' => '0395954444', 'admin' => 1
            ]
        );
    }
}
