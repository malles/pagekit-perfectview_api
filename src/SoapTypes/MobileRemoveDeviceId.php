<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class MobileRemoveDeviceId implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var int
     */
    protected $deviceOs = null;

    /**
     * @var string
     */
    protected $deviceId = null;

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
     * @param int $deviceOs
     * @return $this
     */
    public function setDeviceOs($deviceOs)
    {
        $this->deviceOs = $deviceOs;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeviceOs()
    {
        return $this->deviceOs;
    }

    /**
     * @param string $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }


}

