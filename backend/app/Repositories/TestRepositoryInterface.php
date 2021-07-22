<?php

namespace App\Repositories;

interface TestRepositoryInterface
{
    /**
    * テストテーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTestTableInfo($loginId,$gaId,$limit);
}
