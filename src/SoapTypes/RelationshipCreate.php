<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationshipCreate implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $parentRelationId = null;

    /**
     * @var guid
     */
    protected $childRelationId = null;

    /**
     * @var guid
     */
    protected $relationshipEntityTypeId = null;

    /**
     * @var ArrayOfPvFieldValueData
     */
    protected $relationshipFieldValues = null;

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
     * @param guid $parentRelationId
     * @return $this
     */
    public function setParentRelationId($parentRelationId)
    {
        $this->parentRelationId = $parentRelationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getParentRelationId()
    {
        return $this->parentRelationId;
    }

    /**
     * @param guid $childRelationId
     * @return $this
     */
    public function setChildRelationId($childRelationId)
    {
        $this->childRelationId = $childRelationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getChildRelationId()
    {
        return $this->childRelationId;
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

    /**
     * @param ArrayOfPvFieldValueData $relationshipFieldValues
     * @return $this
     */
    public function setRelationshipFieldValues($relationshipFieldValues)
    {
        $this->relationshipFieldValues = $relationshipFieldValues;
        return $this;
    }

    /**
     * @return ArrayOfPvFieldValueData
     */
    public function getRelationshipFieldValues()
    {
        return $this->relationshipFieldValues;
    }


}

