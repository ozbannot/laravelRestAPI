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
    * @param object $test1TableInfo テスト１テーブル情報
    * @return object $result
    */
    public function getProductInfo($test1TableInfo)
    {
      // 各々の商品情報を取得するためにループ
      /*
      foreach ($test1TableInfo as $key => $test1TableData) {
        $result[$key] = $this->product->getProductInfo($test1TableData->product_id);
      }
      */
      foreach ($test1TableInfo as $key => $test1TableData) { 
        $a[$key] = $test1TableData['product_id'];
      } 
      $result[$key] = $this->product->getProductInfo($a);
      return $result;
    }
}
