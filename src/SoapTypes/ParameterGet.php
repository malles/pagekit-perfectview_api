<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ParameterGet implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var ApiParameters
     */
    protected $apiParameter = null;

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
     * @param ApiParameters $apiParameter
     * @return $this
     */
    public function setApiParameter($apiParameter)
    {
        $this->apiParameter = $apiParameter;
        return $this;
    }

    /**
     * @return ApiParameters
     */
    public function getApiParameter()
    {
        return $this->apiParameter;
    }


}

