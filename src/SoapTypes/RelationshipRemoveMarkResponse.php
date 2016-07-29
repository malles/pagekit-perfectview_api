<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipRemoveMarkResponse implements ResultInterface
{

    /**
     * @var RelationshipRemoveMarkResult
     */
    protected $RelationshipRemoveMarkResult = null;

    /**
     * @param RelationshipRemoveMarkResult $RelationshipRemoveMarkResult
     * @return $this
     */
    public function setRelationshipRemoveMarkResult($RelationshipRemoveMarkResult)
    {
        $this->RelationshipRemoveMarkResult = $RelationshipRemoveMarkResult;
        return $this;
    }

    /**
     * @return RelationshipRemoveMarkResult
     */
    public function getRelationshipRemoveMarkResult()
    {
        return $this->RelationshipRemoveMarkResult;
    }


}

