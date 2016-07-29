<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetTelephoneNumbersResponse implements ResultInterface
{

    /**
     * @var RelationGetTelephoneNumbersResult
     */
    protected $RelationGetTelephoneNumbersResult = null;

    /**
     * @param RelationGetTelephoneNumbersResult $RelationGetTelephoneNumbersResult
     * @return $this
     */
    public function setRelationGetTelephoneNumbersResult($RelationGetTelephoneNumbersResult)
    {
        $this->RelationGetTelephoneNumbersResult = $RelationGetTelephoneNumbersResult;
        return $this;
    }

    /**
     * @return RelationGetTelephoneNumbersResult
     */
    public function getRelationGetTelephoneNumbersResult()
    {
        return $this->RelationGetTelephoneNumbersResult;
    }


}

