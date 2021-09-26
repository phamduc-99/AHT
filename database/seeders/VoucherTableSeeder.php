<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vouchers')->delete();
        DB::table('vouchers')->insert(
        	[
        		['code'=>'km1', 'percent'=>'10'],
                ['code'=>'km2', 'percent'=>'19'],
                ['code'=>'km3', 'percent'=>'40'],
                ['code'=>'km4', 'percent'=>'50'],
                ['code'=>'km5', 'percent'=>'20'],
                ['code'=>'km6', 'percent'=>'30']           
	        ]
        );
    }
}
