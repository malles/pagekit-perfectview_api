<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGetResult
{

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

