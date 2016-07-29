<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetResponse implements ResultInterface
{

    /**
     * @var RelationshipGetResult
     */
    protected $RelationshipGetResult = null;

    /**
     * @param RelationshipGetResult $RelationshipGetResult
     * @return $this
     */
    public function setRelationshipGetResult($RelationshipGetResult)
    {
        $this->RelationshipGetResult = $RelationshipGetResult;
        return $this;
    }

    /**
     * @return RelationshipGetResult
     */
    public function getRelationshipGetResult()
    {
        return $this->RelationshipGetResult;
    }


}

