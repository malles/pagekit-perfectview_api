<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationSearchByMarkResponse implements ResultInterface
{

    /**
     * @var RelationSearchByMarkResult
     */
    protected $RelationSearchByMarkResult = null;

    /**
     * @param RelationSearchByMarkResult $RelationSearchByMarkResult
     * @return $this
     */
    public function setRelationSearchByMarkResult($RelationSearchByMarkResult)
    {
        $this->RelationSearchByMarkResult = $RelationSearchByMarkResult;
        return $this;
    }

    /**
     * @return RelationSearchByMarkResult
     */
    public function getRelationSearchByMarkResult()
    {
        return $this->RelationSearchByMarkResult;
    }


}

