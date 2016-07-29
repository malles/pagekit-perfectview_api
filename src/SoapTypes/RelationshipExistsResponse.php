<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipExistsResponse implements ResultInterface
{

    /**
     * @var RelationshipExistsResult
     */
    protected $RelationshipExistsResult = null;

    /**
     * @param RelationshipExistsResult $RelationshipExistsResult
     * @return $this
     */
    public function setRelationshipExistsResult($RelationshipExistsResult)
    {
        $this->RelationshipExistsResult = $RelationshipExistsResult;
        return $this;
    }

    /**
     * @return RelationshipExistsResult
     */
    public function getRelationshipExistsResult()
    {
        return $this->RelationshipExistsResult;
    }


}

