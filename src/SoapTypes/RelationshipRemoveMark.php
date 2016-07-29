<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationshipRemoveMark implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $relationshipId = null;

    /**
     * @var guid
     */
    protected $markId = null;

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
     * @param guid $relationshipId
     * @return $this
     */
    public function setRelationshipId($relationshipId)
    {
        $this->relationshipId = $relationshipId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationshipId()
    {
        return $this->relationshipId;
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


}

