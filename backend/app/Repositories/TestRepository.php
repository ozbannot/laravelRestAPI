<?php

namespace App\Repositories;

use App\Models\Test1;

class TestRepository implements TestRepositoryInterface
{
    /**
    * テストテーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTestTableInfo($loginId,$gaId,$limit)
    {
      $query = Test1::select('*')
                ->where('login_id',$loginId)
                ->limit($limit)
                ->get();
      $result = $query;
      return $result;
    }
}
