<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipUpdateResponse implements ResultInterface
{

    /**
     * @var RelationshipUp\DateTimeResult
     */
    protected $RelationshipUpdateResult = null;

    /**
     * @param RelationshipUp\DateTimeResult $RelationshipUpdateResult
     * @return $this
     */
    public function setRelationshipUpdateResult($RelationshipUpdateResult)
    {
        $this->RelationshipUpdateResult = $RelationshipUpdateResult;
        return $this;
    }

    /**
     * @return RelationshipUp\DateTimeResult
     */
    public function getRelationshipUpdateResult()
    {
        return $this->RelationshipUpdateResult;
    }


}

