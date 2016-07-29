<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationSearchByNameResponse implements ResultInterface
{

    /**
     * @var RelationSearchByNameResult
     */
    protected $RelationSearchByNameResult = null;

    /**
     * @param RelationSearchByNameResult $RelationSearchByNameResult
     * @return $this
     */
    public function setRelationSearchByNameResult($RelationSearchByNameResult)
    {
        $this->RelationSearchByNameResult = $RelationSearchByNameResult;
        return $this;
    }

    /**
     * @return RelationSearchByNameResult
     */
    public function getRelationSearchByNameResult()
    {
        return $this->RelationSearchByNameResult;
    }


}

