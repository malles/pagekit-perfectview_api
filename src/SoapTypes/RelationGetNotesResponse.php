<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetNotesResponse implements ResultInterface
{

    /**
     * @var RelationGetNotesResult
     */
    protected $RelationGetNotesResult = null;

    /**
     * @param RelationGetNotesResult $RelationGetNotesResult
     * @return $this
     */
    public function setRelationGetNotesResult($RelationGetNotesResult)
    {
        $this->RelationGetNotesResult = $RelationGetNotesResult;
        return $this;
    }

    /**
     * @return RelationGetNotesResult
     */
    public function getRelationGetNotesResult()
    {
        return $this->RelationGetNotesResult;
    }


}

