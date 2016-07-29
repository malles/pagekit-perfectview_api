<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class UserGetViewDefinitions implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var ViewEntryPoint
     */
    protected $entryPoint = null;

    /**
     * @var BaseEntityType
     */
    protected $baseEntityType = null;

    /**
     * @var guid
     */
    protected $entityId = null;

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
     * @param ViewEntryPoint $entryPoint
     * @return $this
     */
    public function setEntryPoint($entryPoint)
    {
        $this->entryPoint = $entryPoint;
        return $this;
    }

    /**
     * @return ViewEntryPoint
     */
    public function getEntryPoint()
    {
        return $this->entryPoint;
    }

    /**
     * @param BaseEntityType $baseEntityType
     * @return $this
     */
    public function setBaseEntityType($baseEntityType)
    {
        $this->baseEntityType = $baseEntityType;
        return $this;
    }

    /**
     * @return BaseEntityType
     */
    public function getBaseEntityType()
    {
        return $this->baseEntityType;
    }

    /**
     * @param guid $entityId
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getEntityId()
    {
        return $this->entityId;
    }


}

