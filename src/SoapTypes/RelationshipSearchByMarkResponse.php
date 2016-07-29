<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipSearchByMarkResponse implements ResultInterface
{

    /**
     * @var RelationshipSearchByMarkResult
     */
    protected $RelationshipSearchByMarkResult = null;

    /**
     * @param RelationshipSearchByMarkResult $RelationshipSearchByMarkResult
     * @return $this
     */
    public function setRelationshipSearchByMarkResult($RelationshipSearchByMarkResult)
    {
        $this->RelationshipSearchByMarkResult = $RelationshipSearchByMarkResult;
        return $this;
    }

    /**
     * @return RelationshipSearchByMarkResult
     */
    public function getRelationshipSearchByMarkResult()
    {
        return $this->RelationshipSearchByMarkResult;
    }


}

