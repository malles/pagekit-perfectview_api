<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class NotificationMarkAsReadResponse implements ResultInterface
{

    /**
     * @var NotificationMarkAsReadResult
     */
    protected $NotificationMarkAsReadResult = null;

    /**
     * @param NotificationMarkAsReadResult $NotificationMarkAsReadResult
     * @return $this
     */
    public function setNotificationMarkAsReadResult($NotificationMarkAsReadResult)
    {
        $this->NotificationMarkAsReadResult = $NotificationMarkAsReadResult;
        return $this;
    }

    /**
     * @return NotificationMarkAsReadResult
     */
    public function getNotificationMarkAsReadResult()
    {
        return $this->NotificationMarkAsReadResult;
    }


}

