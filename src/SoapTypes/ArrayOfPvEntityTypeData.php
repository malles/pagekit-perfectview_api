<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvEntityTypeData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvEntityTypeData
     */
    protected $PvEntityTypeData = null;

    /**
     * @param PvEntityTypeData $PvEntityTypeData
     * @return $this
     */
    public function setPvEntityTypeData($PvEntityTypeData)
    {
        $this->PvEntityTypeData = $PvEntityTypeData;
        return $this;
    }

    /**
     * @return PvEntityTypeData
     */
    public function getPvEntityTypeData()
    {
        return $this->PvEntityTypeData;
    }


}

