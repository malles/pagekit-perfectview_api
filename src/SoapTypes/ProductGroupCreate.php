<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ProductGroupCreate implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var PvProductGroupData
     */
    protected $productGroupData = null;

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
     * @param PvProductGroupData $productGroupData
     * @return $this
     */
    public function setProductGroupData($productGroupData)
    {
        $this->productGroupData = $productGroupData;
        return $this;
    }

    /**
     * @return PvProductGroupData
     */
    public function getProductGroupData()
    {
        return $this->productGroupData;
    }


}

