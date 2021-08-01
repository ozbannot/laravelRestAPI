<?php

namespace App\Services;

use App\Repositories\TestRepositoryInterface;


class PatternService
{
    public function __construct(TestRepositoryInterface $test)
    {
        $this->test = $test;
    }

    /**
    * テストテーブル情報取得
    * @param array $request リクエスト
    * @return object $result
    */
    public function getTestTableInfo($request)
    {
        $result = [];
        $pattern = $request['pattern'];
        $loginId = $request['loginId'];
        $gaId = $request['gaId'];
        $limit = $request['limit'];
        // テスト1テーブル情報取得
        if(in_array(config('const.pattern.all'),$pattern) || in_array(config('const.pattern.one'),$pattern)) {
            $result['one'] = $this->test->getTest1TableInfo($loginId,$gaId,$limit);
        }
        // テスト2テーブル情報取得
        if(in_array(config('const.pattern.all'),$pattern) || in_array(config('const.pattern.two'),$pattern)) {
            $result['two'] = $this->test->getTest2TableInfo($loginId,$gaId,$limit);
        }
        // テスト3テーブル情報取得
        if(in_array(config('const.pattern.all'),$pattern) || in_array(config('const.pattern.three'),$pattern)) {
            $result['three'] = $this->test->getTest3TableInfo($loginId,$gaId,$limit);
        }
        // コレクションに変換
        return collect($result);
    }
}
