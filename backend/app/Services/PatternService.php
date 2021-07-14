<?php

namespace App\Services;

use App\Repositories\Test1RepositoryInterface;
use App\Repositories\Test2RepositoryInterface;


class PatternService
{
    public function __construct(Test1RepositoryInterface $test1,Test2RepositoryInterface $test2)
    {
        $this->test1 = $test1;
        $this->test2 = $test2;
    }
    public function getProductInfo()
    {
        $result = $this->test1->getProductIdInfo();
        return $result;
    }

    public function getProductInfo2()
    {
        $result2 = $this->test2->getProductIdInfo();
        return $result2;
    }
}
