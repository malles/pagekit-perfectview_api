<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class NotificationGetCountResponse implements ResultInterface
{

    /**
     * @var NotificationGetCountResult
     */
    protected $NotificationGetCountResult = null;

    /**
     * @param NotificationGetCountResult $NotificationGetCountResult
     * @return $this
     */
    public function setNotificationGetCountResult($NotificationGetCountResult)
    {
        $this->NotificationGetCountResult = $NotificationGetCountResult;
        return $this;
    }

    /**
     * @return NotificationGetCountResult
     */
    public function getNotificationGetCountResult()
    {
        return $this->NotificationGetCountResult;
    }


}

