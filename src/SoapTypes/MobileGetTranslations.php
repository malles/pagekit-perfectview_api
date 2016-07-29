<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MobileGetTranslations
{

    /**
     * @var guid
     */
    protected $apiKey = null;

    /**
     * @var MobileDeviceOsType
     */
    protected $deviceOs = null;

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
     * @param MobileDeviceOsType $deviceOs
     * @return $this
     */
    public function setDeviceOs($deviceOs)
    {
        $this->deviceOs = $deviceOs;
        return $this;
    }

    /**
     * @return MobileDeviceOsType
     */
    public function getDeviceOs()
    {
        return $this->deviceOs;
    }


}

