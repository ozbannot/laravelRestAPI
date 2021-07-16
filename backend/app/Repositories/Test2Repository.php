<?php

namespace App\Repositories;

use App\Models\Test2;

class Test2Repository implements Test2RepositoryInterface
{
    /**
    * テスト2テーブル情報取得
    * @return array $result2
    */
    public function getTest2TableInfo()
    {
        $result2 = Test2::select('*');
        return $result2->first();
    }
}
