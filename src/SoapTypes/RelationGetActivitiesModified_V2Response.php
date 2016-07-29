<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetActivitiesModified_V2Response implements ResultInterface
{

    /**
     * @var RelationGetActivitiesModifiedResult
     */
    protected $RelationGetActivitiesModified_V2Result = null;

    /**
     * @param RelationGetActivitiesModifiedResult
     * $RelationGetActivitiesModified_V2Result
     * @return $this
     */
    public function setRelationGetActivitiesModified_V2Result($RelationGetActivitiesModified_V2Result)
    {
        $this->RelationGetActivitiesModified_V2Result = $RelationGetActivitiesModified_V2Result;
        return $this;
    }

    /**
     * @return RelationGetActivitiesModifiedResult
     */
    public function getRelationGetActivitiesModified_V2Result()
    {
        return $this->RelationGetActivitiesModified_V2Result;
    }


}

