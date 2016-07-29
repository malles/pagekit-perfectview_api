<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvQueueData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvQueueData
     */
    protected $PvQueueData = null;

    /**
     * @param PvQueueData $PvQueueData
     * @return $this
     */
    public function setPvQueueData($PvQueueData)
    {
        $this->PvQueueData = $PvQueueData;
        return $this;
    }

    /**
     * @return PvQueueData
     */
    public function getPvQueueData()
    {
        return $this->PvQueueData;
    }


}

