<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationSearchByName implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var string
     */
    protected $nameSearchText = null;

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
     * @param string $nameSearchText
     * @return $this
     */
    public function setNameSearchText($nameSearchText)
    {
        $this->nameSearchText = $nameSearchText;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameSearchText()
    {
        return $this->nameSearchText;
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

