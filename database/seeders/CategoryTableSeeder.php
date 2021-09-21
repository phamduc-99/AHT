<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert(
        	[
        		[ 'name' => 'Nam', 'slug'=>'nam'],
                ['name' => 'Nữ', 'slug'=>'nu'],
        		['name' => 'Thu đông', 'slug'=>'thu-dong'],
        		['name' => 'Hè', 'slug'=>'he'],      		
        		['name' => 'Đông', 'slug'=>'dong'],
        		['name' => 'Quần bò', 'slug'=>'quan-bo'],
                ['name' => 'Áo nỉ', 'slug'=>'ao-ni'],
                ['name' => 'Quần âu', 'slug'=>'quan-au'],
                ['name' => 'Set', 'slug'=>'set'],
                ['name' => 'Áo Khoác', 'slug' => 'ao-khoac'],
                ['name' => 'Váy', 'slug' => 'vay']
	        ]
	    );
    }
}
