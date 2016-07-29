<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetActivitiesModifiedResponse implements ResultInterface
{

    /**
     * @var RelationGetActivitiesModifiedResult
     */
    protected $RelationGetActivitiesModifiedResult = null;

    /**
     * @param RelationGetActivitiesModifiedResult $RelationGetActivitiesModifiedResult
     * @return $this
     */
    public function setRelationGetActivitiesModifiedResult($RelationGetActivitiesModifiedResult)
    {
        $this->RelationGetActivitiesModifiedResult = $RelationGetActivitiesModifiedResult;
        return $this;
    }

    /**
     * @return RelationGetActivitiesModifiedResult
     */
    public function getRelationGetActivitiesModifiedResult()
    {
        return $this->RelationGetActivitiesModifiedResult;
    }


}

