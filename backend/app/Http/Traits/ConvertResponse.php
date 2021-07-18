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
  public function convertPatternResponseData($pattern,$loginId,$gaId,$productInfo)
  {
    // TODO 要リファクタ
    if(!$productInfo) {
      $response['pattern'] = $pattern;
      $response['login_id'] = $loginId;
      $response['ga_id'] = $gaId;
      $response['product_id_list'] = [];
      $response['error_list'] = [];
      return $response;
    }
    foreach($productInfo as $key => $info) { // TODO ここの実装は商品情報取得が終わってから
      $response['pattern'] = $pattern;
      $response['login_id'] = $loginId;
      $response['ga_id'] = $gaId;
      $response['product_id_list'][$key] = $info;
      $response['error_list'] = [];
    }
    return $response;
  }
}
