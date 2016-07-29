<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvNotificationData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvNotificationData
     */
    protected $PvNotificationData = null;

    /**
     * @param PvNotificationData $PvNotificationData
     * @return $this
     */
    public function setPvNotificationData($PvNotificationData)
    {
        $this->PvNotificationData = $PvNotificationData;
        return $this;
    }

    /**
     * @return PvNotificationData
     */
    public function getPvNotificationData()
    {
        return $this->PvNotificationData;
    }


}

