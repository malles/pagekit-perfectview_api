<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationSearchByName_V2Response implements ResultInterface
{

    /**
     * @var RelationSearchByNameResult
     */
    protected $RelationSearchByName_V2Result = null;

    /**
     * @param RelationSearchByNameResult $RelationSearchByName_V2Result
     * @return $this
     */
    public function setRelationSearchByName_V2Result($RelationSearchByName_V2Result)
    {
        $this->RelationSearchByName_V2Result = $RelationSearchByName_V2Result;
        return $this;
    }

    /**
     * @return RelationSearchByNameResult
     */
    public function getRelationSearchByName_V2Result()
    {
        return $this->RelationSearchByName_V2Result;
    }


}

