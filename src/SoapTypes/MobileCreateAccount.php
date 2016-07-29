<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MobileCreateAccount
{

    /**
     * @var guid
     */
    protected $apiKey = null;

    /**
     * @var CreateDatabaseData
     */
    protected $accountData = null;

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
     * @param CreateDatabaseData $accountData
     * @return $this
     */
    public function setAccountData($accountData)
    {
        $this->accountData = $accountData;
        return $this;
    }

    /**
     * @return CreateDatabaseData
     */
    public function getAccountData()
    {
        return $this->accountData;
    }


}

