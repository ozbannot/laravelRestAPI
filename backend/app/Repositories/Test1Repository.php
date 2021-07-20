<?php

namespace App\Repositories;

use App\Models\Test1;

class Test1Repository implements Test1RepositoryInterface
{
    /**
    * テスト1テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest1TableInfo($loginId,$gaId,$limit)
    {
        // 取得数
        if($limit === null || $limit > config('const.limit.default')) {
          $limit = config('const.limit.default');
        }
        $query = Test1::select('*')
                  ->where('login_id',$loginId)
                  ->limit($limit)
                  ->get();
        // クエリの結果があるかどうか TODO 要リファクタ
        if ($query->isEmpty()) {
          return $result = null;
        }
        $result = $query->toArray();
        return $result;
    }
}
