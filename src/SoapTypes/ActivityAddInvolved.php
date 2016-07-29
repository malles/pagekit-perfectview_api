<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityAddInvolved implements PerfectviewMethodInterface
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
     * @var guid
     */
    protected $involvedEntityTypeId = null;

    /**
     * @var guid
     */
    protected $relationshipId = null;

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
     * @param guid $involvedEntityTypeId
     * @return $this
     */
    public function setInvolvedEntityTypeId($involvedEntityTypeId)
    {
        $this->involvedEntityTypeId = $involvedEntityTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getInvolvedEntityTypeId()
    {
        return $this->involvedEntityTypeId;
    }

    /**
     * @param guid $relationshipId
     * @return $this
     */
    public function setRelationshipId($relationshipId)
    {
        $this->relationshipId = $relationshipId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationshipId()
    {
        return $this->relationshipId;
    }


}

