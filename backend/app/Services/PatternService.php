<?php

namespace App\Services;

use App\Repositories\TestRepositoryInterface;
// use App\Repositories\Test2RepositoryInterface;


class PatternService
{
    public function __construct(TestRepositoryInterface $test)
    {
        $this->test = $test;
        //$this->test2 = $test2;
    }

    /**
    * テストテーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTestTableInfo($loginId,$gaId,$limit)
    {
        $result = $this->test->getTestTableInfo($loginId,$gaId,$limit);
        return $result;
    }

    /**
    * テスト2テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest2TableInfo($loginId,$gaId,$limit)
    {
        $result2 = $this->test2->getTest2TableInfo($loginId,$gaId,$limit);
        return $result2;
    }
}
