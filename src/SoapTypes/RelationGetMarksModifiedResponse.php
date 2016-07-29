<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetMarksModifiedResponse implements ResultInterface
{

    /**
     * @var RelationGetMarksModifiedResult
     */
    protected $RelationGetMarksModifiedResult = null;

    /**
     * @param RelationGetMarksModifiedResult $RelationGetMarksModifiedResult
     * @return $this
     */
    public function setRelationGetMarksModifiedResult($RelationGetMarksModifiedResult)
    {
        $this->RelationGetMarksModifiedResult = $RelationGetMarksModifiedResult;
        return $this;
    }

    /**
     * @return RelationGetMarksModifiedResult
     */
    public function getRelationGetMarksModifiedResult()
    {
        return $this->RelationGetMarksModifiedResult;
    }


}

