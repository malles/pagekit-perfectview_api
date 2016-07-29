<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ProductUpdate implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var PvProductData
     */
    protected $productData = null;

    /**
     * @param ApiCredentials $credentials
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param PvProductData $productData
     * @return $this
     */
    public function setProductData($productData)
    {
        $this->productData = $productData;
        return $this;
    }

    /**
     * @return PvProductData
     */
    public function getProductData()
    {
        return $this->productData;
    }


}

