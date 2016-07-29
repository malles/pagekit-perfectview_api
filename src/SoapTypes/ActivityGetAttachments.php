<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityGetAttachments implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $activityId = null;

    /**
     * @var bool
     */
    protected $includeFile = null;

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
     * @param guid $activityId
     * @return $this
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * @param bool $includeFile
     * @return $this
     */
    public function setIncludeFile($includeFile)
    {
        $this->includeFile = $includeFile;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeFile()
    {
        return $this->includeFile;
    }


}

