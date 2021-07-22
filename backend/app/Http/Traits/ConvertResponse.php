<?php
namespace App\Http\Traits;

/**
* レスポンスデータ整形トレイト
*/
trait ConvertResponse { 

  /**
  * パターンAPIレスポンスデータ整形
  * @param int $pattern
  * @param int $loginId
  * @param int $gaId
  * @param object $productInfo
  * @return array $response
  */
  public function convertPatternResponseData($pattern,$loginId,$gaId,$testProductInfo,$test2ProductInfo)
  {
    //初期定義
    $response = [];

    $response['pattern'] = $pattern;
    $response['login_id'] = $loginId;
    $response['ga_id'] = $gaId;
    $response['test_product_list'] = $testProductInfo;
    $response['test2_product_list'] = $test2ProductInfo;
    $response['error_list'] = [];

    return response()->json($response);
  }
}
