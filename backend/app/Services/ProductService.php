<?php

namespace App\Services;

use App\Repositories\ProductRepositoryInterface;


class ProductService
{
    public function __construct(ProductRepositoryInterface $product)
    {
        $this->product = $product;
    }

    /**
    * 商品情報取得
    * @param object $testTableInfo テストテーブル商品ID情報
    * @return object $result
    */
    public function getProductInfo($testTableInfo)
    {
      $result = [];
      // テストテーブル群に対してループ処理で商品情報取得する
      foreach ($testTableInfo as $key => $testTableSingle) {
        $result[$key] = $this->product->getProductInfo($testTableSingle);
      }
      // コレクションに変換
      return collect($result);
    }
}
