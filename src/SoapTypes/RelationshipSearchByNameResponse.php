<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipSearchByNameResponse implements ResultInterface
{

    /**
     * @var RelationshipSearchByNameResult
     */
    protected $RelationshipSearchByNameResult = null;

    /**
     * @param RelationshipSearchByNameResult $RelationshipSearchByNameResult
     * @return $this
     */
    public function setRelationshipSearchByNameResult($RelationshipSearchByNameResult)
    {
        $this->RelationshipSearchByNameResult = $RelationshipSearchByNameResult;
        return $this;
    }

    /**
     * @return RelationshipSearchByNameResult
     */
    public function getRelationshipSearchByNameResult()
    {
        return $this->RelationshipSearchByNameResult;
    }


}

