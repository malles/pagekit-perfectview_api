<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvProductGroupData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvProductGroupData
     */
    protected $PvProductGroupData = null;

    /**
     * @param PvProductGroupData $PvProductGroupData
     * @return $this
     */
    public function setPvProductGroupData($PvProductGroupData)
    {
        $this->PvProductGroupData = $PvProductGroupData;
        return $this;
    }

    /**
     * @return PvProductGroupData
     */
    public function getPvProductGroupData()
    {
        return $this->PvProductGroupData;
    }


}

