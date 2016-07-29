<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvVatData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvVatData
     */
    protected $PvVatData = null;

    /**
     * @param PvVatData $PvVatData
     * @return $this
     */
    public function setPvVatData($PvVatData)
    {
        $this->PvVatData = $PvVatData;
        return $this;
    }

    /**
     * @return PvVatData
     */
    public function getPvVatData()
    {
        return $this->PvVatData;
    }


}

