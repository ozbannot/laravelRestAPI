<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
  /**
  * 商品情報取得
  * @param object $testTableSingle テストテーブル商品ID情報
  * @return object $result
  */
  public function getProductInfo($testTableSingle)
  {
    // 商品テーブル
    $query = Product::select('*')
              ->join('product_classes','product_classes.product_id','=','products.product_id')
              ->whereIn('products.product_id',$testTableSingle)
              ->get();
    $result = $query;  
    return $result;
  }
}
