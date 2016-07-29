<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetAllResponse implements ResultInterface
{

    /**
     * @var RelationshipGetAllResult
     */
    protected $RelationshipGetAllResult = null;

    /**
     * @param RelationshipGetAllResult $RelationshipGetAllResult
     * @return $this
     */
    public function setRelationshipGetAllResult($RelationshipGetAllResult)
    {
        $this->RelationshipGetAllResult = $RelationshipGetAllResult;
        return $this;
    }

    /**
     * @return RelationshipGetAllResult
     */
    public function getRelationshipGetAllResult()
    {
        return $this->RelationshipGetAllResult;
    }


}

