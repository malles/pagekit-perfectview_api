<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvActivityData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvActivityData
     */
    protected $PvActivityData = null;

    /**
     * @param PvActivityData $PvActivityData
     * @return $this
     */
    public function setPvActivityData($PvActivityData)
    {
        $this->PvActivityData = $PvActivityData;
        return $this;
    }

    /**
     * @return PvActivityData
     */
    public function getPvActivityData()
    {
        return $this->PvActivityData;
    }


}

