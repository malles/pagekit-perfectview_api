<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityGet implements PerfectviewMethodInterface
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
    protected $includeFields = null;

    /**
     * @var bool
     */
    protected $includeCounters = null;

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
     * @param bool $includeFields
     * @return $this
     */
    public function setIncludeFields($includeFields)
    {
        $this->includeFields = $includeFields;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeFields()
    {
        return $this->includeFields;
    }

    /**
     * @param bool $includeCounters
     * @return $this
     */
    public function setIncludeCounters($includeCounters)
    {
        $this->includeCounters = $includeCounters;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeCounters()
    {
        return $this->includeCounters;
    }


}

