<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatternController extends Controller
{
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
        // json返却テストのため格納する
        $response['pattern'] = $pattern;
        $response['login_id'] = $request->login_id;
        $response['ga_id'] = $request->ga_id;
        $response['product_id_list'] = [];
        $response['error_list'] = [];

        return response()->json($response);
    }
}
