<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipSearchByName_V2Response implements ResultInterface
{

    /**
     * @var RelationshipSearchByNameResult
     */
    protected $RelationshipSearchByName_V2Result = null;

    /**
     * @param RelationshipSearchByNameResult $RelationshipSearchByName_V2Result
     * @return $this
     */
    public function setRelationshipSearchByName_V2Result($RelationshipSearchByName_V2Result)
    {
        $this->RelationshipSearchByName_V2Result = $RelationshipSearchByName_V2Result;
        return $this;
    }

    /**
     * @return RelationshipSearchByNameResult
     */
    public function getRelationshipSearchByName_V2Result()
    {
        return $this->RelationshipSearchByName_V2Result;
    }


}

