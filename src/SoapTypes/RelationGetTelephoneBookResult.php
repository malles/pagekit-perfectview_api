<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationGetTelephoneBookResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfTelephoneBookEntry
     */
    protected $TelephoneBookEntries = null;

    /**
     * @param ArrayOfTelephoneBookEntry $TelephoneBookEntries
     * @return $this
     */
    public function setTelephoneBookEntries($TelephoneBookEntries)
    {
        $this->TelephoneBookEntries = $TelephoneBookEntries;
        return $this;
    }

    /**
     * @return ArrayOfTelephoneBookEntry
     */
    public function getTelephoneBookEntries()
    {
        return $this->TelephoneBookEntries;
    }


}

