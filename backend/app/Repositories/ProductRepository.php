<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
  /**
  * 商品情報取得
  * @param object $testInfo 商品ID群
  * @return object $result
  */
  public function getProductInfo($testInfo)
  {
    // 商品テーブル
    $query = Product::select('*')
              ->join('product_classes','product_classes.product_id','=','products.product_id')
              ->whereIn('products.product_id',$testInfo->pluck('product_id'))
              ->get();
    $result = $query;  
    return $query;
  }
}
