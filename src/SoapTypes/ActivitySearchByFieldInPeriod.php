<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class ActivitySearchByFieldInPeriod implements PerfectviewMethodInterface
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
     * @var ArrayOfPvFieldValueData
     */
    protected $fieldValues = null;

    /**
     * @var guid
     */
    protected $dateFieldId = null;

    /**
     * @var \DateTime
     */
    protected $from = null;

    /**
     * @var \DateTime
     */
    protected $to = null;

    /**
     * @var int
     */
    protected $pageNumber = null;

    /**
     * @var int
     */
    protected $pageSize = null;

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
     * @param guid $dateFieldId
     * @return $this
     */
    public function setDateFieldId($dateFieldId)
    {
        $this->dateFieldId = $dateFieldId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getDateFieldId()
    {
        return $this->dateFieldId;
    }

    /**
     * @param \DateTime $from
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param \DateTime $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageSize
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
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

