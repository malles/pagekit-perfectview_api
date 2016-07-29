<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetChildRelationshipsResponse implements ResultInterface
{

    /**
     * @var RelationGetChildRelationshipsResult
     */
    protected $RelationGetChildRelationshipsResult = null;

    /**
     * @param RelationGetChildRelationshipsResult $RelationGetChildRelationshipsResult
     * @return $this
     */
    public function setRelationGetChildRelationshipsResult($RelationGetChildRelationshipsResult)
    {
        $this->RelationGetChildRelationshipsResult = $RelationGetChildRelationshipsResult;
        return $this;
    }

    /**
     * @return RelationGetChildRelationshipsResult
     */
    public function getRelationGetChildRelationshipsResult()
    {
        return $this->RelationGetChildRelationshipsResult;
    }


}

