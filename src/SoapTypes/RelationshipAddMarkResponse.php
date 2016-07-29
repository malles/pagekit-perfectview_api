<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipAddMarkResponse implements ResultInterface
{

    /**
     * @var RelationshipAddMarkResult
     */
    protected $RelationshipAddMarkResult = null;

    /**
     * @param RelationshipAddMarkResult $RelationshipAddMarkResult
     * @return $this
     */
    public function setRelationshipAddMarkResult($RelationshipAddMarkResult)
    {
        $this->RelationshipAddMarkResult = $RelationshipAddMarkResult;
        return $this;
    }

    /**
     * @return RelationshipAddMarkResult
     */
    public function getRelationshipAddMarkResult()
    {
        return $this->RelationshipAddMarkResult;
    }


}

