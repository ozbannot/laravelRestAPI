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
    public function index(Request $request, int $pattern)
    {
        // 初期定義
        $response = [];
        // テスト1テーブル情報取得
        $test1TableInfo = $this->pattern->getTest1TableInfo();
        // テスト2テーブル情報取得
        $test2TableInfo = $this->pattern->getTest2TableInfo();
        // json返却テストのため格納する
        $response['pattern'] = $pattern;
        $response['login_id'] = $test1TableInfo->login_id;
        $response['ga_id'] = $test1TableInfo->ga_id;
        $response['product_id_list'] = [];
        $response['product_id_list']['product_id'] = $test2TableInfo->product_id;
        $response['error_list'] = [];

        return response()->json($response);
    }
}
