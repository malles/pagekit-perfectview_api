<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvProductData
     */
    protected $Product = null;

    /**
     * @param PvProductData $Product
     * @return $this
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
        return $this;
    }

    /**
     * @return PvProductData
     */
    public function getProduct()
    {
        return $this->Product;
    }


}

