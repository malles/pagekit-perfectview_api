<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MobileGetCreateAccountDatastore
{

    /**
     * @var guid
     */
    protected $apiKey = null;

    /**
     * @var string
     */
    protected $cultureCode = null;

    /**
     * @var CreateAccountDatastoreType
     */
    protected $datastoreType = null;

    /**
     * @param guid $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return guid
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $cultureCode
     * @return $this
     */
    public function setCultureCode($cultureCode)
    {
        $this->cultureCode = $cultureCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCultureCode()
    {
        return $this->cultureCode;
    }

    /**
     * @param CreateAccountDatastoreType $datastoreType
     * @return $this
     */
    public function setDatastoreType($datastoreType)
    {
        $this->datastoreType = $datastoreType;
        return $this;
    }

    /**
     * @return CreateAccountDatastoreType
     */
    public function getDatastoreType()
    {
        return $this->datastoreType;
    }


}

