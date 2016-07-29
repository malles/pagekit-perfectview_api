<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvNotificationData
{

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

