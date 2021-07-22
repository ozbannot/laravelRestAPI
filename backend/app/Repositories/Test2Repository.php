<?php

namespace App\Repositories;

use App\Models\Test2;

class Test2Repository implements Test2RepositoryInterface
{
    /**
    * テスト2テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest2TableInfo($loginId,$gaId,$limit)
    {
      $query = Test2::select('*')
                ->where('login_id',$loginId)
                ->limit($limit)
                ->get();
      $result = $query;
      return $result;
    }
}
