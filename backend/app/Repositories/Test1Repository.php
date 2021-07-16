<?php

namespace App\Repositories;

use App\Models\Test1;

class Test1Repository implements Test1RepositoryInterface
{
    /**
    * テスト1テーブル情報取得
    * @return array $result
    */
    public function getTest1TableInfo()
    {
        $result = Test1::select('*');
        return $result->first();
    }
}
