<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipSearchByFieldResponse implements ResultInterface
{

    /**
     * @var RelationshipSearchByFieldResult
     */
    protected $RelationshipSearchByFieldResult = null;

    /**
     * @param RelationshipSearchByFieldResult $RelationshipSearchByFieldResult
     * @return $this
     */
    public function setRelationshipSearchByFieldResult($RelationshipSearchByFieldResult)
    {
        $this->RelationshipSearchByFieldResult = $RelationshipSearchByFieldResult;
        return $this;
    }

    /**
     * @return RelationshipSearchByFieldResult
     */
    public function getRelationshipSearchByFieldResult()
    {
        return $this->RelationshipSearchByFieldResult;
    }


}

