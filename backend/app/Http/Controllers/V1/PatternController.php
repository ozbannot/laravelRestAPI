<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
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
        $loginId = $request->login_id ?: null; // ログインID
        $gaId = $request->ga_id ?: null; // GAID
        $limit = $request->limit ?: null; // 取得数

        // 取得数の再定義
        if($limit === null || $limit > config('const.limit.default')) {
          $limit = config('const.limit.default');
        }

        // テスト情報取得
        $testInfo = $this->pattern->getTestTableInfo($loginId,$gaId,$limit);

        // 商品情報取得
        $productInfo = $this->product->getProductInfo($testInfo);
        dd($productInfo);
        
    }
}
