<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvUserDatabase
{

    /**
     * @var guid
     */
    protected $ApiKey = null;

    /**
     * @var guid
     */
    protected $UserId = null;

    /**
     * @var string
     */
    protected $AccountName = null;

    /**
     * @var string
     */
    protected $UserDisplayName = null;

    /**
     * @var guid
     */
    protected $DatabaseId = null;

    /**
     * @var string
     */
    protected $DatabaseName = null;

    /**
     * @var string
     */
    protected $RootRelationName = null;

    /**
     * @param guid $ApiKey
     * @return $this
     */
    public function setApiKey($ApiKey)
    {
        $this->ApiKey = $ApiKey;
        return $this;
    }

    /**
     * @return guid
     */
    public function getApiKey()
    {
        return $this->ApiKey;
    }

    /**
     * @param guid $UserId
     * @return $this
     */
    public function setUserId($UserId)
    {
        $this->UserId = $UserId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * @param string $AccountName
     * @return $this
     */
    public function setAccountName($AccountName)
    {
        $this->AccountName = $AccountName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }

    /**
     * @param string $UserDisplayName
     * @return $this
     */
    public function setUserDisplayName($UserDisplayName)
    {
        $this->UserDisplayName = $UserDisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserDisplayName()
    {
        return $this->UserDisplayName;
    }

    /**
     * @param guid $DatabaseId
     * @return $this
     */
    public function setDatabaseId($DatabaseId)
    {
        $this->DatabaseId = $DatabaseId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getDatabaseId()
    {
        return $this->DatabaseId;
    }

    /**
     * @param string $DatabaseName
     * @return $this
     */
    public function setDatabaseName($DatabaseName)
    {
        $this->DatabaseName = $DatabaseName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseName()
    {
        return $this->DatabaseName;
    }

    /**
     * @param string $RootRelationName
     * @return $this
     */
    public function setRootRelationName($RootRelationName)
    {
        $this->RootRelationName = $RootRelationName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRootRelationName()
    {
        return $this->RootRelationName;
    }


}

