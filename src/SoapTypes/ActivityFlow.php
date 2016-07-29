<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityFlow implements PerfectviewMethodInterface
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
    protected $transitionId = null;

    /**
     * @var guid
     */
    protected $userId = null;

    /**
     * @var guid
     */
    protected $queueId = null;

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
     * @param guid $transitionId
     * @return $this
     */
    public function setTransitionId($transitionId)
    {
        $this->transitionId = $transitionId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getTransitionId()
    {
        return $this->transitionId;
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
     * @param guid $queueId
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->queueId = $queueId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getQueueId()
    {
        return $this->queueId;
    }


}

