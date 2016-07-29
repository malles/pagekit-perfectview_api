<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationSearchByMark implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var int
     */
    protected $pageNumber = null;

    /**
     * @var int
     */
    protected $pageSize = null;

    /**
     * @var guid
     */
    protected $markId = null;

    /**
     * @var \DateTime
     */
    protected $from = null;

    /**
     * @var \DateTime
     */
    protected $to = null;

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
     * @param guid $markId
     * @return $this
     */
    public function setMarkId($markId)
    {
        $this->markId = $markId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getMarkId()
    {
        return $this->markId;
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

