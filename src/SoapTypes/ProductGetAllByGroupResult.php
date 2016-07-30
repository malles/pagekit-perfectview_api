<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGetAllByGroupResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvProductData
     */
    protected $Products = null;

    /**
     * @param ArrayOfPvProductData $Products
     * @return $this
     */
    public function setProducts($Products)
    {
        $this->Products = $Products;
        return $this;
    }

    /**
     * @return ArrayOfPvProductData
     */
    public function getProducts()
    {
        return $this->Products;
    }


}

