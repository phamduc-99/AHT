<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        DB::table('products')->insert(
        	[
                ['name' => 'Áo thun nữ','code'=>'AN008', 'slug'=>'ao-thun-nu', 'price' => 350000,'discount' => 340000, 'featured' => 2, 'state' => 1, 'info'=>'Áo thun nữ đẹp', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
        		['name' => 'Váy nữ','code'=>'AN001', 'slug'=>'vay-nu', 'price' => 150000,'discount' => 140000, 'featured' => 1, 'state' => 1, 'info'=>'Váy nữ đẹp', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
                ['name' => 'Áo hai dây','code'=>'AN005', 'slug'=>'ao-hai-day', 'price' => 500000,'discount' => 480000, 'featured' => 2, 'state' => 1, 'info'=>'Áo hai dây phong cách, quyến rũ', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
        		['name' => 'Áo nữ cổ đúc','code'=>'AN002', 'slug'=>'ao-nu-co-duc', 'price' => 350000,'discount' => 330000, 'featured' => 0, 'state' => 1, 'info'=>'Áo nữ có cổ đúc', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
        		['name' => 'Quần bò đỏ mận','code'=>'KAKI', 'slug'=>'quan-bo-do-man', 'price' => 350000,'discount' => 340000, 'featured' => 1, 'state' => 1, 'info'=>'Quần bò đỏ mận', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
        		['name' => 'Quần Âu phong cách','code'=>'AN003', 'slug'=>'quan-au-phong-cach', 'price' => 350000,'discount' => 340000, 'featured' => 2, 'state' => 1, 'info'=>'Quần Âu phong cách', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
                ['name' => 'Áo nỉ nam','code'=>'AN007', 'slug'=>'ao-ni-nam', 'price' => 200000,'discount' => 190000, 'featured' => 1, 'state' => 1, 'info'=>'Aó nỉ nam bền đẹp', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.'],
                ['name' => 'Áo khoác nữ','code'=>'AK001', 'slug'=>'ao-khoac-nu', 'price' => 100000, 'discount' => 900000, 'featured' => 1, 'state' => 1, 'info'=>'Áo khoác nữ', 'describer'=> 'Cuộc gặp gỡ giản dị dễ dàng mát mẻ với nhãn thời trang dạo phố thời thượng của chúng tôi. Hãy coi đó là bộ sưu tập phong cách hàng ngày của bạn, từ những bộ cánh sắc sảo đến những bộ hợp thời, và tất cả những phụ kiện bạn cần để làm cho vẻ ngoài của mình trở nên chất hơn.']
	        ]
	    );
    }
}
