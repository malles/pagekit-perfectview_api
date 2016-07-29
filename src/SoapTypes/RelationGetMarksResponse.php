<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetMarksResponse implements ResultInterface
{

    /**
     * @var RelationGetMarksResult
     */
    protected $RelationGetMarksResult = null;

    /**
     * @param RelationGetMarksResult $RelationGetMarksResult
     * @return $this
     */
    public function setRelationGetMarksResult($RelationGetMarksResult)
    {
        $this->RelationGetMarksResult = $RelationGetMarksResult;
        return $this;
    }

    /**
     * @return RelationGetMarksResult
     */
    public function getRelationGetMarksResult()
    {
        return $this->RelationGetMarksResult;
    }


}

