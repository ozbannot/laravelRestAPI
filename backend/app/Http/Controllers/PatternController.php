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
        // 商品情報取得
        $productInfo = $this->pattern->getProductInfo();
        // 商品情報取得2
        $productInfo2 = $this->pattern->getProductInfo2();
        // json返却テストのため格納する
        $response['pattern'] = $pattern;
        $response['login_id'] = $productInfo->login_id;
        $response['ga_id'] = $productInfo->ga_id;
        $response['product_id_list'] = [];
        $response['product_id_list']['product_id'] = $productInfo2->product_id;
        $response['error_list'] = [];

        return response()->json($response);
    }
}
