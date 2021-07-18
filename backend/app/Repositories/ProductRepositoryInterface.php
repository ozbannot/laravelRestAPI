<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
  /**
  * 商品情報取得
  * @param object $product_id 商品ID
  * @return object $result
  */
  public function getProductInfo($product_id);
}
