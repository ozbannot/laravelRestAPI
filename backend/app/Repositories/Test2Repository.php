<?php

namespace App\Repositories;

use App\Models\Test2;

class Test2Repository implements Test2RepositoryInterface
{
    /**
     * 商品情報取得
     * @param string
     * @return object
     */
    public function getProductIdInfo()
    {
        $result = Test2::select('*');
        return $result->first();
    }
}
