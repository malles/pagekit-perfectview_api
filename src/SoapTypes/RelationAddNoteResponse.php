<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationAddNoteResponse implements ResultInterface
{

    /**
     * @var RelationAddNoteResult
     */
    protected $RelationAddNoteResult = null;

    /**
     * @param RelationAddNoteResult $RelationAddNoteResult
     * @return $this
     */
    public function setRelationAddNoteResult($RelationAddNoteResult)
    {
        $this->RelationAddNoteResult = $RelationAddNoteResult;
        return $this;
    }

    /**
     * @return RelationAddNoteResult
     */
    public function getRelationAddNoteResult()
    {
        return $this->RelationAddNoteResult;
    }


}

