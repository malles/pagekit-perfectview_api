<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationshipGetFields implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $relationshipEntityTypeId = null;

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
     * @param guid $relationshipEntityTypeId
     * @return $this
     */
    public function setRelationshipEntityTypeId($relationshipEntityTypeId)
    {
        $this->relationshipEntityTypeId = $relationshipEntityTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationshipEntityTypeId()
    {
        return $this->relationshipEntityTypeId;
    }


}

