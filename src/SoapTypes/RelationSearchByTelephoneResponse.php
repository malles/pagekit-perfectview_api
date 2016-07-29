<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationSearchByTelephoneResponse implements ResultInterface
{

    /**
     * @var RelationSearchByTelephoneResult
     */
    protected $RelationSearchByTelephoneResult = null;

    /**
     * @param RelationSearchByTelephoneResult $RelationSearchByTelephoneResult
     * @return $this
     */
    public function setRelationSearchByTelephoneResult($RelationSearchByTelephoneResult)
    {
        $this->RelationSearchByTelephoneResult = $RelationSearchByTelephoneResult;
        return $this;
    }

    /**
     * @return RelationSearchByTelephoneResult
     */
    public function getRelationSearchByTelephoneResult()
    {
        return $this->RelationSearchByTelephoneResult;
    }


}

