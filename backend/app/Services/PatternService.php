<?php

namespace App\Services;

use App\Repositories\Test1RepositoryInterface;
use App\Repositories\Test2RepositoryInterface;


class PatternService
{
    public function __construct(Test1RepositoryInterface $test1,Test2RepositoryInterface $test2)
    {
        $this->test1 = $test1;
        $this->test2 = $test2;
    }

    /**
    * テスト1テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest1TableInfo($loginId,$gaId,$limit)
    {
        $result = $this->test1->getTest1TableInfo($loginId,$gaId,$limit);
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
