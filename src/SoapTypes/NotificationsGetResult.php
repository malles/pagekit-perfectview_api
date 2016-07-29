<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class NotificationsGetResult
{

    /**
     * @var ArrayOfPvNotificationData
     */
    protected $Notifications = null;

    /**
     * @param ArrayOfPvNotificationData $Notifications
     * @return $this
     */
    public function setNotifications($Notifications)
    {
        $this->Notifications = $Notifications;
        return $this;
    }

    /**
     * @return ArrayOfPvNotificationData
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }


}

