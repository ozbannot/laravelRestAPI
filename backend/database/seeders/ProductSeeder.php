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
        'product_id'=>'1',
        'product_name'=>'PID1',
        'price'=>'10000',
        'brand_id'=>'1',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'2',
        'product_id'=>'2',
        'product_name'=>'PID2',
        'price'=>'20000',
        'brand_id'=>'2',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'3',
        'product_id'=>'3',
        'product_name'=>'PID3',
        'price'=>'30000',
        'brand_id'=>'2',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
    ]);
    }
}
