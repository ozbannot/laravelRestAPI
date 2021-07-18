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
        // 取得数
        if($limit === null || $limit > config('const.limit.default')) {
          $limit = config('const.limit.default');
        }
        $result = Test2::select('*')
                  ->where('login_id',$loginId)
                  ->limit($limit)
                  ->get();
        // クエリの結果があるかどうか TODO 要リファクタ
        if ($result->isEmpty()) {
          $result = null;
        }
        return $result;
    }
}
