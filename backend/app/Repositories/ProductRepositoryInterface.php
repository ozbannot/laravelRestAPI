<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
  /**
  * 商品情報取得
  * @param object $test1TableInfo 商品ID群
  * @return object $result
  */
  public function getProductInfo($a);
}
