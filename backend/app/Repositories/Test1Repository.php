<?php

namespace App\Repositories;

use App\Models\Test1;

class Test1Repository implements Test1RepositoryInterface
{
    /**
     * 商品情報取得
     * @param string
     * @return object
     */
    public function getProductIdInfo()
    {
        $result = Test1::select('*');
        return $result->first();
    }
}
