<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

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
        ['id'=>'1',
        'product_id'=>'33333',
        'product_name'=>'あいでぃ１',
        'price'=>'10000',
        'brand_id'=>'1',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'2',
        'product_id'=>'55555',
        'product_name'=>'あいでぃ2',
        'price'=>'20000',
        'brand_id'=>'2',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
    ]);
    }
}
