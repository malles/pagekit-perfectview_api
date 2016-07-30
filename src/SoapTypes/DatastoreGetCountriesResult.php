<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class DatastoreGetCountriesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

