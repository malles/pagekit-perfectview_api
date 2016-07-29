<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;
use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationshipViewGetData implements \JsonSerializable, PerfectviewMethodInterface
{

    use JsonSerializableTrait;

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var string
     */
    protected $viewSql = null;

    /**
     * @var int
     */
    protected $pageNumber = null;

    /**
     * @var int
     */
    protected $pageSize = null;

    /**
     * @var string
     */
    protected $searchText = null;

    /**
     * @var ArrayOfGuid
     */
    protected $fieldIds = null;

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
     * @param string $viewSql
     * @return $this
     */
    public function setViewSql($viewSql)
    {
        $this->viewSql = $viewSql;
        return $this;
    }

    /**
     * @return string
     */
    public function getViewSql()
    {
        return $this->viewSql;
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
     * @param string $searchText
     * @return $this
     */
    public function setSearchText($searchText)
    {
        $this->searchText = $searchText;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
        return $this->searchText;
    }

    /**
     * @param ArrayOfGuid $fieldIds
     * @return $this
     */
    public function setFieldIds($fieldIds)
    {
        $this->fieldIds = $fieldIds;
        return $this;
    }

    /**
     * @return ArrayOfGuid
     */
    public function getFieldIds()
    {
        return $this->fieldIds;
    }


}

