<?php

namespace App\Services;

use App\Repositories\Test1RepositoryInterface;

class PatternService
{
    public function __construct(Test1RepositoryInterface $test1)
    {
        $this->test1 = $test1;
    }
    public function getProductInfo()
    {
        $result = $this->test1->getProductIdInfo();
        return $result;
    }
}
