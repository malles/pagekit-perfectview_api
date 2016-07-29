<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class EnumerationGetItems implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var string
     */
    protected $enumerationName = null;

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
     * @param string $enumerationName
     * @return $this
     */
    public function setEnumerationName($enumerationName)
    {
        $this->enumerationName = $enumerationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnumerationName()
    {
        return $this->enumerationName;
    }


}

