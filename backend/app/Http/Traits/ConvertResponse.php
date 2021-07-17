<?php
namespace App\Http\Traits;

/**
* レスポンスデータ整形トレイト
*/
trait ConvertResponse { 

  /**
  * パターンAPIレスポンスデータ整形
  * @param int $pattern
  * @param object $tableInfo
  * @return array $response
  */
  public function convertPatternResponseData($pattern,$tableInfo)
  {
    $response['pattern'] = $pattern;
    $response['login_id'] = $tableInfo->login_id;
    $response['ga_id'] = $tableInfo->ga_id;
    $response['product_id_list'] = [];
    $response['product_id_list']['product_id'] = $tableInfo->product_id;
    $response['error_list'] = [];
    return $response;
  }
}
