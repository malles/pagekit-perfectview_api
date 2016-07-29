<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationSearchByNameAndGetPhoneNumbersResult
{

    /**
     * @var ArrayOfRelationPhoneNumbersType
     */
    protected $RelationTelephoneNumbers = null;

    /**
     * @param ArrayOfRelationPhoneNumbersType $RelationTelephoneNumbers
     * @return $this
     */
    public function setRelationTelephoneNumbers($RelationTelephoneNumbers)
    {
        $this->RelationTelephoneNumbers = $RelationTelephoneNumbers;
        return $this;
    }

    /**
     * @return ArrayOfRelationPhoneNumbersType
     */
    public function getRelationTelephoneNumbers()
    {
        return $this->RelationTelephoneNumbers;
    }


}

