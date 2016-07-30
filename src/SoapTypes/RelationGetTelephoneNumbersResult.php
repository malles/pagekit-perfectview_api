<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationGetTelephoneNumbersResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

