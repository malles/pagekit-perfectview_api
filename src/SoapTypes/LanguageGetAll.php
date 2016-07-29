<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class LanguageGetAll
{

    /**
     * @var guid
     */
    protected $apiKey = null;

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


}

