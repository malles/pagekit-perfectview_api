<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class NotificationsGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

