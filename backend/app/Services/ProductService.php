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
    * @param object $testInfo テストテーブル情報
    * @return object $result
    */
    public function getProductInfo($testInfo)
    {
      $result = $this->product->getProductInfo($testInfo);
      return $result;
    }
}
