<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvFieldValueData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvFieldValueData
     */
    protected $PvFieldValueData = null;

    /**
     * @param PvFieldValueData $PvFieldValueData
     * @return $this
     */
    public function setPvFieldValueData($PvFieldValueData)
    {
        $this->PvFieldValueData = $PvFieldValueData;
        return $this;
    }

    /**
     * @return PvFieldValueData
     */
    public function getPvFieldValueData()
    {
        return $this->PvFieldValueData;
    }


}

