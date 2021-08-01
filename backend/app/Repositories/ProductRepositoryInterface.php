<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
  /**
  * 商品情報取得
  * @param object $testTableSingle テストテーブル商品ID情報
  * @return object $result
  */
  public function getProductInfo($testTableSingle);
}
