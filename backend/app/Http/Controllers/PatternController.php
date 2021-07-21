<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PatternService;
use App\Services\ProductService;
use App\Http\Traits\ConvertResponse;
use App\Http\Requests\PatternRequest;

class PatternController extends Controller
{
    use ConvertResponse;
    private $patternService;
    private $productService;
    public function __construct(PatternService $patternService,ProductService $productService)
    {
        $this->pattern = $patternService;
        $this->product = $productService;
    }
    /**
    * パターンAPI コントローラー
    * @param Request リクエスト
    * @param int パターン
    * @return json レスポンス返却値
    */
    public function index(PatternRequest $request,int $pattern)
    {
        // 初期定義
        $response = []; // レスポンス
        $loginId = $request->login_id ?: null; // ログインID
        $gaId = $request->ga_id ?: null; // GAID
        $limit = $request->limit ?: null; // 取得数
        $productInfo = null; // 商品情報

        // パターン1,3
        if ($pattern === config('const.pattern.one') || $pattern === config('const.pattern.three')) {
            // テスト1テーブル情報取得
            $test1TableInfo = $this->pattern->getTest1TableInfo($loginId,$gaId,$limit);
            // 商品情報取得
            if ($test1TableInfo) {
                $productInfo = $this->product->getProductInfo($test1TableInfo);
            }
            // json返却のため整形する
            $response = $this->convertPatternResponseData($pattern,$loginId,$gaId,$productInfo);
        }

        // パターン2
        if ($pattern === config('const.pattern.two')) {
            // テスト2テーブル情報取得
            $test2TableInfo = $this->pattern->getTest2TableInfo($loginId,$gaId,$limit);
            // 商品情報取得
            if ($test2TableInfo) {
                $productInfo = $this->product->getProductInfo($test2TableInfo);
            }
            // json返却のため整形する
            $response = $this->convertPatternResponseData($pattern,$loginId,$gaId,$productInfo);
        }

        return response()->json($response);
    }
}
