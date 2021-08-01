<?php

namespace App\Repositories;

use App\Models\Test1;
use App\Models\Test2;
use App\Models\Test3;

class TestRepository implements TestRepositoryInterface
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
      $query = Test1::select('product_id')
                ->where('login_id',$loginId)
                ->limit($limit)
                ->get();
      $result = $query;
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
      $query = Test2::select('product_id')
                ->where('login_id',$loginId)
                ->limit($limit)
                ->get();
      $result = $query;
      return $result;
    }

    /**
    * テスト3テーブル情報取得
    * @param int $loginId ログインID
    * @param int $gaId GAID
    * @param int $limit 取得数
    * @return object $result
    */
    public function getTest3TableInfo($loginId,$gaId,$limit)
    {
      $query = Test3::select('product_id')
                ->where('login_id',$loginId)
                ->limit($limit)
                ->get();
      $result = $query;
      return $result;
    }
}
