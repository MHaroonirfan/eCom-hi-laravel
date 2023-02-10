<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert([
    		[
        	'name'=>'Oppo Mobile',
        	"price"=>"12000",
        	"description"=>"a smartphone with 8GB ram, Oppo best camera and best features for gamming",
        	"category"=>"mobile",
        	"gallery"=>"https://assorted.downloads.oppo.com/static/assets/products/findx2_pro_black/images/home/appearance/[pro]sec-3-black_1280-74183d6f9b67729e444e8714cb052b73.jpg"
        	],
        	[
        	'name'=>'Samsung UHG TV',
        	"price"=>"20000",
        	"description"=>"a best tv with best features and best visual experience with best audio",
        	"category"=>"tv",
        	"gallery"=>"https://www.shophive.com/media/catalog/product/cache/3617b85921733ef3774cdbec091e1c0f/7/1/71ljjrkbezl.jpg"
        	],
        	[
        	'name'=>'LG TV',
        	"price"=>"25000",
        	"description"=>"a best LG tv with best features with slim LCD and best visual experience with best audio",
        	"category"=>"tv",
        	"gallery"=>"https://www.lg.com/ae/images/tvs/md06247876/gallery/D-01.jpg"
        	],
        	[
        	'name'=>'Dawlance-Refrigerator-9178 AVANTE (Glass Door)',
        	"price"=>"77900",
        	"description"=>"For Your Daily Food Preservation Needs. This Elegant Glass Door Series Epitomises Luxury And Sophistication And Offer Key Features To Simplify Your Every-Day Modern Lifestyle.",
        	"category"=>"fridge",
        	"gallery"=>"https://modernelectronics.pk/wp-content/uploads/2021/09/91999-avante.jpg"
        	]


        	]);
        
    }
}
