<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Database
{

    /**
     * @var guid
     */
    protected $ContractOwnerApiKey = null;

    /**
     * @var guid
     */
    protected $ProcessOwnerApiKey = null;

    /**
     * @var guid
     */
    protected $LeadGeneratorApiKey = null;

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
    protected $ConformationCode = null;

    /**
     * @var int
     */
    protected $NumberOfLicenses = null;

    /**
     * @param guid $ContractOwnerApiKey
     * @return $this
     */
    public function setContractOwnerApiKey($ContractOwnerApiKey)
    {
        $this->ContractOwnerApiKey = $ContractOwnerApiKey;
        return $this;
    }

    /**
     * @return guid
     */
    public function getContractOwnerApiKey()
    {
        return $this->ContractOwnerApiKey;
    }

    /**
     * @param guid $ProcessOwnerApiKey
     * @return $this
     */
    public function setProcessOwnerApiKey($ProcessOwnerApiKey)
    {
        $this->ProcessOwnerApiKey = $ProcessOwnerApiKey;
        return $this;
    }

    /**
     * @return guid
     */
    public function getProcessOwnerApiKey()
    {
        return $this->ProcessOwnerApiKey;
    }

    /**
     * @param guid $LeadGeneratorApiKey
     * @return $this
     */
    public function setLeadGeneratorApiKey($LeadGeneratorApiKey)
    {
        $this->LeadGeneratorApiKey = $LeadGeneratorApiKey;
        return $this;
    }

    /**
     * @return guid
     */
    public function getLeadGeneratorApiKey()
    {
        return $this->LeadGeneratorApiKey;
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
     * @param string $ConformationCode
     * @return $this
     */
    public function setConformationCode($ConformationCode)
    {
        $this->ConformationCode = $ConformationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getConformationCode()
    {
        return $this->ConformationCode;
    }

    /**
     * @param int $NumberOfLicenses
     * @return $this
     */
    public function setNumberOfLicenses($NumberOfLicenses)
    {
        $this->NumberOfLicenses = $NumberOfLicenses;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfLicenses()
    {
        return $this->NumberOfLicenses;
    }


}

