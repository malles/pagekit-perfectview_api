<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetModifiedResponse implements ResultInterface
{

    /**
     * @var RelationGetModifiedResult
     */
    protected $RelationGetModifiedResult = null;

    /**
     * @param RelationGetModifiedResult $RelationGetModifiedResult
     * @return $this
     */
    public function setRelationGetModifiedResult($RelationGetModifiedResult)
    {
        $this->RelationGetModifiedResult = $RelationGetModifiedResult;
        return $this;
    }

    /**
     * @return RelationGetModifiedResult
     */
    public function getRelationGetModifiedResult()
    {
        return $this->RelationGetModifiedResult;
    }


}

