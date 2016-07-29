<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityAddNote_V2 implements PerfectviewMethodInterface
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
     * @var string
     */
    protected $text = null;

    /**
     * @var guid
     */
    protected $noteTypeId = null;

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
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param guid $noteTypeId
     * @return $this
     */
    public function setNoteTypeId($noteTypeId)
    {
        $this->noteTypeId = $noteTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getNoteTypeId()
    {
        return $this->noteTypeId;
    }


}

