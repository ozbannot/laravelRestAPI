<?php
namespace App\Http\Traits;

/**
* レスポンスデータ整形トレイト
*/
trait Convert { 

  /**
  * パターンAPIリクエストデータ整形
  * @param Request $request
  * @return array $result
  */
  public function convertPatternApiRequest($request)
  {
    // リクエストデータ整形
    $result = [];
    $result['pattern'] = $request->pattern ?: array(config('const.pattern.all')); // パターン
    $result['loginId'] = $request->login_id ?: null; // ログインID
    $result['gaId'] = $request->ga_id ?: null; // GAID
    $result['limit'] = $request->limit ?: null; // 取得数
    // パターンの再定義
    if(in_array(config('const.pattern.all'),$result['pattern'])) {
      $result['pattern'] = array(config('const.pattern.all'));
    }
    // 取得数の再定義
    if($result['limit'] === null || $result['limit'] > config('const.limit.default')) {
      $result['limit'] = config('const.limit.default');
    }
    return $result;
  }

  /**
  * パターンAPIレスポンスデータ整形
  * @param array $request
  * @param object $testProductInfo
  * @return array $response
  */
  public function convertPatternResponseData($request,$testProductInfo)
  {
    //初期定義
    $response = [];

    $response['pattern'] = implode(',', $request['pattern']);
    $response['login_id'] = $request['loginId'];
    $response['ga_id'] = $request['gaId'];
    $response['test_product_list'] = $testProductInfo->get('one') ?: [];
    $response['test2_product_list'] = $testProductInfo->get('two') ?: [];
    $response['test3_product_list'] = $testProductInfo->get('three') ?: [];
    $response['error_list'] = [];
    return $response;
  }
}
