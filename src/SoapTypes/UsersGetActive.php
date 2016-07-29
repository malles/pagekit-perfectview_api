<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class UsersGetActive implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var bool
     */
    protected $includeImages = null;

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
     * @param bool $includeImages
     * @return $this
     */
    public function setIncludeImages($includeImages)
    {
        $this->includeImages = $includeImages;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeImages()
    {
        return $this->includeImages;
    }


}

