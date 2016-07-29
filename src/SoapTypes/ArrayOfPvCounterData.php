<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvCounterData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvCounterData
     */
    protected $PvCounterData = null;

    /**
     * @param PvCounterData $PvCounterData
     * @return $this
     */
    public function setPvCounterData($PvCounterData)
    {
        $this->PvCounterData = $PvCounterData;
        return $this;
    }

    /**
     * @return PvCounterData
     */
    public function getPvCounterData()
    {
        return $this->PvCounterData;
    }


}

