<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PatternService;

class PatternController extends Controller
{
    private $patternService;
    public function __construct(PatternService $patternService)
    {
        $this->pattern = $patternService;
    }
    /**
    * パターンAPI コントローラー
    * @param Request リクエスト
    * @param int パターン
    * @return json レスポンス返却値
    */
    public function index(Request $request,int $pattern)
    {
        // 初期定義
        $response = []; // レスポンス
        $loginId = $request->login_id ?: null; // ログインID
        $gaId = $request->ga_id ?: null; // GAID
        $limit = $request->limit ?: null; // 取得数

        // パターン1,3
        if ($pattern === 1 || $pattern === 3) { // TODO ハードコーディング修正
            // テスト1テーブル情報取得
            $test1TableInfo = $this->pattern->getTest1TableInfo();
            // json返却のため整形する
            $response = $this->convertResponseData($pattern,$test1TableInfo);
        }

        // パターン2
        if ($pattern === 2) {
            // テスト2テーブル情報取得
            $test2TableInfo = $this->pattern->getTest2TableInfo();
            // json返却のため整形する
            $response = $this->convertResponseData($pattern,$test2TableInfo);
        }

        return response()->json($response);
    }

    /**
    * レスポンスデータ整形
    * @param int $pattern
    * @param object $tableInfo
    * @return array $response
    */
    public function convertResponseData($pattern,$tableInfo)
    {
        $response['pattern'] = $pattern;
        $response['login_id'] = $tableInfo->login_id;
        $response['ga_id'] = $tableInfo->ga_id;
        $response['product_id_list'] = [];
        $response['product_id_list']['product_id'] = $tableInfo->product_id;
        $response['error_list'] = [];
        return $response;
    }
}
