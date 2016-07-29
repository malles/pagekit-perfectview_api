<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvCountryData implements \JsonSerializable
{

    use JsonSerializableTrait;

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

