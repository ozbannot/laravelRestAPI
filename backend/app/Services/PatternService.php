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
    * @return array $result
    */
    public function getTest1TableInfo()
    {
        $result = $this->test1->getTest1TableInfo();
        return $result;
    }

    /**
    * テスト2テーブル情報取得
    * @return array $result2
    */
    public function getTest2TableInfo()
    {
        $result2 = $this->test2->getTest2TableInfo();
        return $result2;
    }
}
