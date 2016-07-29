<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationSearchByFieldResponse implements ResultInterface
{

    /**
     * @var RelationSearchByFieldResult
     */
    protected $RelationSearchByFieldResult = null;

    /**
     * @param RelationSearchByFieldResult $RelationSearchByFieldResult
     * @return $this
     */
    public function setRelationSearchByFieldResult($RelationSearchByFieldResult)
    {
        $this->RelationSearchByFieldResult = $RelationSearchByFieldResult;
        return $this;
    }

    /**
     * @return RelationSearchByFieldResult
     */
    public function getRelationSearchByFieldResult()
    {
        return $this->RelationSearchByFieldResult;
    }


}

