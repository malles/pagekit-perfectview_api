<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetTelephoneBookResponse implements ResultInterface
{

    /**
     * @var RelationGetTelephoneBookResult
     */
    protected $RelationGetTelephoneBookResult = null;

    /**
     * @param RelationGetTelephoneBookResult $RelationGetTelephoneBookResult
     * @return $this
     */
    public function setRelationGetTelephoneBookResult($RelationGetTelephoneBookResult)
    {
        $this->RelationGetTelephoneBookResult = $RelationGetTelephoneBookResult;
        return $this;
    }

    /**
     * @return RelationGetTelephoneBookResult
     */
    public function getRelationGetTelephoneBookResult()
    {
        return $this->RelationGetTelephoneBookResult;
    }


}

