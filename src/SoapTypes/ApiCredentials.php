<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ApiCredentials
{

    /**
     * @var guid
     */
    protected $ApiKey = null;

    /**
     * @var guid
     */
    protected $DatabaseId = null;

    /**
     * @var guid
     */
    protected $UserId = null;

    /**
     * @var string
     */
    protected $UserName = null;

    /**
     * @var string
     */
    protected $Password = null;

    /**
     * @var ApiSourceApplication
     */
    protected $SourceApplication = null;

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
     * @param string $UserName
     * @return $this
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @param string $Password
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param ApiSourceApplication $SourceApplication
     * @return $this
     */
    public function setSourceApplication($SourceApplication)
    {
        $this->SourceApplication = $SourceApplication;
        return $this;
    }

    /**
     * @return ApiSourceApplication
     */
    public function getSourceApplication()
    {
        return $this->SourceApplication;
    }


}

