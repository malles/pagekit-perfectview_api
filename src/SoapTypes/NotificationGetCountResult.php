<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class NotificationGetCountResult
{

    /**
     * @var int
     */
    protected $NumberOfNotifications = null;

    /**
     * @param int $NumberOfNotifications
     * @return $this
     */
    public function setNumberOfNotifications($NumberOfNotifications)
    {
        $this->NumberOfNotifications = $NumberOfNotifications;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNotifications()
    {
        return $this->NumberOfNotifications;
    }


}

