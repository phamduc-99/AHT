<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();
        DB::table('images')->insert(
        	[
        		['product_id'=>'1', 'img'=>'product2-1.jpg'],
                ['product_id'=>'1', 'img'=>'product2-2.jpg'],
                ['product_id'=>'1', 'img'=>'product2-3.jpg'],
                ['product_id'=>'2', 'img'=>'product1-1.jpg'],
                ['product_id'=>'2', 'img'=>'product1-2.jpg'],
                ['product_id'=>'2', 'img'=>'product1-3.jpg'],
                ['product_id'=>'3', 'img'=>'product3-1.jpg'],
                ['product_id'=>'3', 'img'=>'product3-2.jpg'],
                ['product_id'=>'3', 'img'=>'product3-3.jpg'],
                ['product_id'=>'4', 'img'=>'product5-1.jpg'],
                ['product_id'=>'4', 'img'=>'product5-2.jpg'],
                ['product_id'=>'4', 'img'=>'product5-3.jpg'],
                ['product_id'=>'5', 'img'=>'product6-1.jpg'],
                ['product_id'=>'5', 'img'=>'product6-2.jpg'],
                ['product_id'=>'5', 'img'=>'product6-3.jpg'],
                ['product_id'=>'6', 'img'=>'product8-1.jpg'],
                ['product_id'=>'6', 'img'=>'product8-2.jpg'],
                ['product_id'=>'6', 'img'=>'product8-3.jpg'],
                ['product_id'=>'7', 'img'=>'product4-1.jpg'],
                ['product_id'=>'7', 'img'=>'product4-2.jpg'],
                ['product_id'=>'7', 'img'=>'product4-3.jpg'],
                ['product_id'=>'8', 'img'=>'product7-1.jpg'],
                ['product_id'=>'8', 'img'=>'product7-2.jpg'],
                ['product_id'=>'8', 'img'=>'product7-3.jpg']
	        ]
	    );
    }
}
