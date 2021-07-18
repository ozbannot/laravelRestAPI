<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
  /**
  * 商品情報取得
  * @param object $product_id 商品ID
  * @return object $result
  */
  public function getProductInfo($product_id)
  {
    // 商品テーブル
    $query = Product::select('*')
             ->join('product_classes','product_classes.product_id','=','products.product_id')
             ->where('products.product_id',$product_id)
             ->first()
             ->toArray();
    return $query;
  }
}
