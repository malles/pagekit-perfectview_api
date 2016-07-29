<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivityCreate implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var PvActivitySettingsData
     */
    protected $settings = null;

    /**
     * @var PvActivityFollowUpData
     */
    protected $followUp = null;

    /**
     * @var ArrayOfPvFieldValueData
     */
    protected $fieldValues = null;

    /**
     * @var guid
     */
    protected $connectToActivityId = null;

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
     * @param PvActivitySettingsData $settings
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * @return PvActivitySettingsData
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * @param PvActivityFollowUpData $followUp
     * @return $this
     */
    public function setFollowUp($followUp)
    {
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * @return PvActivityFollowUpData
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * @param ArrayOfPvFieldValueData $fieldValues
     * @return $this
     */
    public function setFieldValues($fieldValues)
    {
        $this->fieldValues = $fieldValues;
        return $this;
    }

    /**
     * @return ArrayOfPvFieldValueData
     */
    public function getFieldValues()
    {
        return $this->fieldValues;
    }

    /**
     * @param guid $connectToActivityId
     * @return $this
     */
    public function setConnectToActivityId($connectToActivityId)
    {
        $this->connectToActivityId = $connectToActivityId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getConnectToActivityId()
    {
        return $this->connectToActivityId;
    }


}

