<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipViewGetDataResponse implements ResultInterface
{

    /**
     * @var RelationshipViewGetDataResult
     */
    protected $RelationshipViewGetDataResult = null;

    /**
     * @param RelationshipViewGetDataResult $RelationshipViewGetDataResult
     * @return $this
     */
    public function setRelationshipViewGetDataResult($RelationshipViewGetDataResult)
    {
        $this->RelationshipViewGetDataResult = $RelationshipViewGetDataResult;
        return $this;
    }

    /**
     * @return RelationshipViewGetDataResult
     */
    public function getRelationshipViewGetDataResult()
    {
        return $this->RelationshipViewGetDataResult;
    }


}

