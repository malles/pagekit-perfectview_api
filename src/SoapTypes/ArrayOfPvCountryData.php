<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvCountryData
{

    /**
     * @var PvCountryData
     */
    protected $PvCountryData = null;

    /**
     * @param PvCountryData $PvCountryData
     * @return $this
     */
    public function setPvCountryData($PvCountryData)
    {
        $this->PvCountryData = $PvCountryData;
        return $this;
    }

    /**
     * @return PvCountryData
     */
    public function getPvCountryData()
    {
        return $this->PvCountryData;
    }


}

