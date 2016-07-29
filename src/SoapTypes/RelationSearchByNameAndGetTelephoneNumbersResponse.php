<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationSearchByNameAndGetTelephoneNumbersResponse implements ResultInterface
{

    /**
     * @var RelationSearchByNameAndGetPhoneNumbersResult
     */
    protected $RelationSearchByNameAndGetTelephoneNumbersResult = null;

    /**
     * @param RelationSearchByNameAndGetPhoneNumbersResult
     * $RelationSearchByNameAndGetTelephoneNumbersResult
     * @return $this
     */
    public function setRelationSearchByNameAndGetTelephoneNumbersResult($RelationSearchByNameAndGetTelephoneNumbersResult)
    {
        $this->RelationSearchByNameAndGetTelephoneNumbersResult = $RelationSearchByNameAndGetTelephoneNumbersResult;
        return $this;
    }

    /**
     * @return RelationSearchByNameAndGetPhoneNumbersResult
     */
    public function getRelationSearchByNameAndGetTelephoneNumbersResult()
    {
        return $this->RelationSearchByNameAndGetTelephoneNumbersResult;
    }


}

