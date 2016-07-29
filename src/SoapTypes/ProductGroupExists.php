<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ProductGroupExists implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $ProductGroupId = null;

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
     * @param guid $ProductGroupId
     * @return $this
     */
    public function setProductGroupId($ProductGroupId)
    {
        $this->ProductGroupId = $ProductGroupId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getProductGroupId()
    {
        return $this->ProductGroupId;
    }


}

