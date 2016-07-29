<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvObjectRightData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvObjectRightData
     */
    protected $PvObjectRightData = null;

    /**
     * @param PvObjectRightData $PvObjectRightData
     * @return $this
     */
    public function setPvObjectRightData($PvObjectRightData)
    {
        $this->PvObjectRightData = $PvObjectRightData;
        return $this;
    }

    /**
     * @return PvObjectRightData
     */
    public function getPvObjectRightData()
    {
        return $this->PvObjectRightData;
    }


}

