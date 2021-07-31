<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PatternService;
use App\Services\ProductService;
use App\Http\Traits\ConvertResponse;
use App\Http\Requests\PatternRequest;
use Illuminate\Support\Facades\Log;
// use App\Http\Resources\ProductResource;

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
    * @return json レスポンス返却値
    */
    public function index(PatternRequest $request)
    {
        // リクエストURLロギング
        Log::info('リクエストURL取得:',array(urldecode($request->fullUrl())));

        // 初期定義
        $pattern = $request->pattern ?: null; // パターン
        $loginId = $request->login_id ?: null; // ログインID
        $gaId = $request->ga_id ?: null; // GAID
        $limit = $request->limit ?: null; // 取得数

        // 取得数の再定義
        if($limit === null || $limit > config('const.limit.default')) {
          $limit = config('const.limit.default');
        }

        // テスト情報取得
        $testInfo = $this->pattern->getTestTableInfo($loginId,$gaId,$limit);
        // テスト商品情報取得
        $testProductInfo = $this->product->getProductInfo($testInfo);

        // テスト2情報取得
        $test2Info = $this->pattern->getTest2TableInfo($loginId,$gaId,$limit);
        // テスト2商品情報取得
        $test2ProductInfo = $this->product->getProductInfo($test2Info);

        // レスポンス生成
        $response = $this->convertPatternResponseData($pattern,$loginId,$gaId,$testProductInfo,$test2ProductInfo);
        return $response;
        
    }
}
