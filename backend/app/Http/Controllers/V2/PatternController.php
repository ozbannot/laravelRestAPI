<?php

namespace App\Http\Controllers\V2;

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
        return response()->json('tests');
    }
}
