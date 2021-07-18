<?php

namespace App\Repositories;

interface Test2RepositoryInterface
{
    /**
    * テスト2テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest2TableInfo($loginId,$gaId,$limit);
}
