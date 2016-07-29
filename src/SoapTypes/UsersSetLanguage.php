<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class UsersSetLanguage implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $userId = null;

    /**
     * @var string
     */
    protected $cultureCode = null;

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
     * @param guid $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
        return $this->userId;
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


}

