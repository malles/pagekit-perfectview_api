<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvFieldData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvFieldData
     */
    protected $PvFieldData = null;

    /**
     * @param PvFieldData $PvFieldData
     * @return $this
     */
    public function setPvFieldData($PvFieldData)
    {
        $this->PvFieldData = $PvFieldData;
        return $this;
    }

    /**
     * @return PvFieldData
     */
    public function getPvFieldData()
    {
        return $this->PvFieldData;
    }


}

