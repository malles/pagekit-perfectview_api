<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class NotificationMarkAsReadResult
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

