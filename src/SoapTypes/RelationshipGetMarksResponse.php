<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetMarksResponse implements ResultInterface
{

    /**
     * @var RelationshipGetMarksResult
     */
    protected $RelationshipGetMarksResult = null;

    /**
     * @param RelationshipGetMarksResult $RelationshipGetMarksResult
     * @return $this
     */
    public function setRelationshipGetMarksResult($RelationshipGetMarksResult)
    {
        $this->RelationshipGetMarksResult = $RelationshipGetMarksResult;
        return $this;
    }

    /**
     * @return RelationshipGetMarksResult
     */
    public function getRelationshipGetMarksResult()
    {
        return $this->RelationshipGetMarksResult;
    }


}

