<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetParentRelationshipsResponse implements ResultInterface
{

    /**
     * @var RelationGetParentRelationshipsResult
     */
    protected $RelationGetParentRelationshipsResult = null;

    /**
     * @param RelationGetParentRelationshipsResult
     * $RelationGetParentRelationshipsResult
     * @return $this
     */
    public function setRelationGetParentRelationshipsResult($RelationGetParentRelationshipsResult)
    {
        $this->RelationGetParentRelationshipsResult = $RelationGetParentRelationshipsResult;
        return $this;
    }

    /**
     * @return RelationGetParentRelationshipsResult
     */
    public function getRelationGetParentRelationshipsResult()
    {
        return $this->RelationGetParentRelationshipsResult;
    }


}

