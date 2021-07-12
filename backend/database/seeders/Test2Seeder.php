<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class Test2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test2')->insert([
        ['id'=>'1',
        'product_id'=>'33333',
        'ga_id'=>'3333',
        'login_id'=>'1123322',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'2',
        'product_id'=>'111222',
        'ga_id'=>'6666',
        'login_id'=>'777',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
    ]);
    }
}
