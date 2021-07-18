<?php

namespace App\Repositories;

interface Test1RepositoryInterface
{
    /**
    * テスト1テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest1TableInfo($loginId,$gaId,$limit);
}
