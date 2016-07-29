<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationUpdate implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $relationId = null;

    /**
     * @var ArrayOfPvFieldValueData
     */
    protected $fieldValues = null;

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
     * @param guid $relationId
     * @return $this
     */
    public function setRelationId($relationId)
    {
        $this->relationId = $relationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * @param ArrayOfPvFieldValueData $fieldValues
     * @return $this
     */
    public function setFieldValues($fieldValues)
    {
        $this->fieldValues = $fieldValues;
        return $this;
    }

    /**
     * @return ArrayOfPvFieldValueData
     */
    public function getFieldValues()
    {
        return $this->fieldValues;
    }


}

