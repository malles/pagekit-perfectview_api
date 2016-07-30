<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationSearchByNameAndGetPhoneNumbersResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

