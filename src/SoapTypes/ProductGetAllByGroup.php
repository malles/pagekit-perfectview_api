<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ProductGetAllByGroup implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $productGroupId = null;

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
     * @param guid $productGroupId
     * @return $this
     */
    public function setProductGroupId($productGroupId)
    {
        $this->productGroupId = $productGroupId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getProductGroupId()
    {
        return $this->productGroupId;
    }


}

