<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationGetTelephoneBookResult
{

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

