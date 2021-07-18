<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class ProductClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_classes')->insert([
        ['id'=>'1',
        'product_id'=>'99999',
        'stock'=>'12',
        'stock_limit_flag'=>'0',
        'tax'=>'10',
        'publication_date'=>new Datetime(),
        'from_date'=>new Datetime(),
        'to_date'=>new Datetime(),
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'2',
        'product_id'=>'55555',
        'stock'=>'11',
        'stock_limit_flag'=>'1',
        'tax'=>'10',
        'publication_date'=>new Datetime(),
        'from_date'=>new Datetime(),
        'to_date'=>new Datetime(),
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'3',
        'product_id'=>'88888',
        'stock'=>'11',
        'stock_limit_flag'=>'1',
        'tax'=>'10',
        'publication_date'=>new Datetime(),
        'from_date'=>new Datetime(),
        'to_date'=>new Datetime(),
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
    ]);
    }
}
