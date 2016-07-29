<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetChildRelationshipsModifiedResponse implements ResultInterface
{

    /**
     * @var RelationGetChildRelationshipsModifiedResult
     */
    protected $RelationGetChildRelationshipsModifiedResult = null;

    /**
     * @param RelationGetChildRelationshipsModifiedResult
     * $RelationGetChildRelationshipsModifiedResult
     * @return $this
     */
    public function setRelationGetChildRelationshipsModifiedResult($RelationGetChildRelationshipsModifiedResult)
    {
        $this->RelationGetChildRelationshipsModifiedResult = $RelationGetChildRelationshipsModifiedResult;
        return $this;
    }

    /**
     * @return RelationGetChildRelationshipsModifiedResult
     */
    public function getRelationGetChildRelationshipsModifiedResult()
    {
        return $this->RelationGetChildRelationshipsModifiedResult;
    }


}

