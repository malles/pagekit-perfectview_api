<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetActivitiesResponse implements ResultInterface
{

    /**
     * @var RelationGetActivitiesResult
     */
    protected $RelationGetActivitiesResult = null;

    /**
     * @param RelationGetActivitiesResult $RelationGetActivitiesResult
     * @return $this
     */
    public function setRelationGetActivitiesResult($RelationGetActivitiesResult)
    {
        $this->RelationGetActivitiesResult = $RelationGetActivitiesResult;
        return $this;
    }

    /**
     * @return RelationGetActivitiesResult
     */
    public function getRelationGetActivitiesResult()
    {
        return $this->RelationGetActivitiesResult;
    }


}

