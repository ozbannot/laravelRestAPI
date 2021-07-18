<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test1')->insert([
        ['id'=>'1',
        'product_id'=>'99999',
        'ga_id'=>'11111',
        'login_id'=>'11222',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'2',
        'product_id'=>'88888',
        'ga_id'=>'11111',
        'login_id'=>11222,
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'3',
        'product_id'=>'55555',
        'ga_id'=>'333333',
        'login_id'=>3333,
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
    ]);
    }
}
