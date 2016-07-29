<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityInvolvedEntityTypesGet implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $activityEntityTypeId = null;

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
     * @param guid $activityEntityTypeId
     * @return $this
     */
    public function setActivityEntityTypeId($activityEntityTypeId)
    {
        $this->activityEntityTypeId = $activityEntityTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getActivityEntityTypeId()
    {
        return $this->activityEntityTypeId;
    }


}

