<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetFieldsResponse implements ResultInterface
{

    /**
     * @var RelationshipGetFieldsResult
     */
    protected $RelationshipGetFieldsResult = null;

    /**
     * @param RelationshipGetFieldsResult $RelationshipGetFieldsResult
     * @return $this
     */
    public function setRelationshipGetFieldsResult($RelationshipGetFieldsResult)
    {
        $this->RelationshipGetFieldsResult = $RelationshipGetFieldsResult;
        return $this;
    }

    /**
     * @return RelationshipGetFieldsResult
     */
    public function getRelationshipGetFieldsResult()
    {
        return $this->RelationshipGetFieldsResult;
    }


}

