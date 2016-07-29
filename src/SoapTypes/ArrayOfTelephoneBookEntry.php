<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfTelephoneBookEntry
{

    /**
     * @var TelephoneBookEntry
     */
    protected $TelephoneBookEntry = null;

    /**
     * @param TelephoneBookEntry $TelephoneBookEntry
     * @return $this
     */
    public function setTelephoneBookEntry($TelephoneBookEntry)
    {
        $this->TelephoneBookEntry = $TelephoneBookEntry;
        return $this;
    }

    /**
     * @return TelephoneBookEntry
     */
    public function getTelephoneBookEntry()
    {
        return $this->TelephoneBookEntry;
    }


}

