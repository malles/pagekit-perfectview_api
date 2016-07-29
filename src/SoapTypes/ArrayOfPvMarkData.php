<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvMarkData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvMarkData
     */
    protected $PvMarkData = null;

    /**
     * @param PvMarkData $PvMarkData
     * @return $this
     */
    public function setPvMarkData($PvMarkData)
    {
        $this->PvMarkData = $PvMarkData;
        return $this;
    }

    /**
     * @return PvMarkData
     */
    public function getPvMarkData()
    {
        return $this->PvMarkData;
    }


}

