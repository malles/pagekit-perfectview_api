<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetModifiedResponse implements ResultInterface
{

    /**
     * @var RelationshipGetModifiedResult
     */
    protected $RelationshipGetModifiedResult = null;

    /**
     * @param RelationshipGetModifiedResult $RelationshipGetModifiedResult
     * @return $this
     */
    public function setRelationshipGetModifiedResult($RelationshipGetModifiedResult)
    {
        $this->RelationshipGetModifiedResult = $RelationshipGetModifiedResult;
        return $this;
    }

    /**
     * @return RelationshipGetModifiedResult
     */
    public function getRelationshipGetModifiedResult()
    {
        return $this->RelationshipGetModifiedResult;
    }


}

