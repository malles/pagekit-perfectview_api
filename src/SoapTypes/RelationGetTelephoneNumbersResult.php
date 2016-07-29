<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationGetTelephoneNumbersResult
{

    /**
     * @var ArrayOfPvTelephoneNumberData
     */
    protected $TelephoneNumbers = null;

    /**
     * @param ArrayOfPvTelephoneNumberData $TelephoneNumbers
     * @return $this
     */
    public function setTelephoneNumbers($TelephoneNumbers)
    {
        $this->TelephoneNumbers = $TelephoneNumbers;
        return $this;
    }

    /**
     * @return ArrayOfPvTelephoneNumberData
     */
    public function getTelephoneNumbers()
    {
        return $this->TelephoneNumbers;
    }


}

