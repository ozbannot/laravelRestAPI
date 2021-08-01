<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PatternService;
use App\Services\ProductService;
use App\Http\Traits\Convert;
use App\Http\Requests\PatternRequest;
use Illuminate\Support\Facades\Log;
// use App\Http\Resources\ProductResource;

class PatternController extends Controller
{
    use Convert;
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

        // リクエストパラメータ整形
        $request = $this->convertPatternApiRequest($request);

        // パターン情報ロギング
        Log::info('パターン情報:',$request);

        // テストテーブル情報取得
        $testTableInfo = $this->pattern->getTestTableInfo($request);

        // テストテーブル情報ロギング
        Log::info('テストテーブル情報:',$testTableInfo->toArray());

        // テスト商品情報取得
        $testProductInfo = $this->product->getProductInfo($testTableInfo);

        // レスポンス生成
        $response = $this->convertPatternResponseData($request,$testProductInfo);

        // テスト商品情報ロギング
        Log::info('レスポンス情報:',$response);

        // jsonでレスポンス返却
        return response()->json($response);
    }
}
