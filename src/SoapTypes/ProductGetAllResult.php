<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGetAllResult
{

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

