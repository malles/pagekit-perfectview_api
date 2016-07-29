<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class DatastoreGetCountriesResult
{

    /**
     * @var ArrayOfPvCountryData
     */
    protected $Countries = null;

    /**
     * @param ArrayOfPvCountryData $Countries
     * @return $this
     */
    public function setCountries($Countries)
    {
        $this->Countries = $Countries;
        return $this;
    }

    /**
     * @return ArrayOfPvCountryData
     */
    public function getCountries()
    {
        return $this->Countries;
    }


}

