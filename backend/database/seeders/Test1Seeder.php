<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use DateTime;

class Test1Seeder extends Seeder
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
        'product_id'=>'1',
        'ga_id'=>'1',
        'login_id'=>'1',
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'2',
        'product_id'=>'2',
        'ga_id'=>'1',
        'login_id'=>1,
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'3',
        'product_id'=>'3',
        'ga_id'=>'1',
        'login_id'=>1,
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'4',
        'product_id'=>'1',
        'ga_id'=>'2',
        'login_id'=>2,
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
        ['id'=>'5',
        'product_id'=>'3',
        'ga_id'=>'3',
        'login_id'=>3,
        'create_date'=>new Datetime(),
        'update_date'=>new Datetime(),
        'delete_flag'=>'0'
        ],
    ]);
    }
}
