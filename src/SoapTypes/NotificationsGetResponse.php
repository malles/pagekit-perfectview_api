<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class NotificationsGetResponse implements ResultInterface
{

    /**
     * @var NotificationsGetResult
     */
    protected $NotificationsGetResult = null;

    /**
     * @param NotificationsGetResult $NotificationsGetResult
     * @return $this
     */
    public function setNotificationsGetResult($NotificationsGetResult)
    {
        $this->NotificationsGetResult = $NotificationsGetResult;
        return $this;
    }

    /**
     * @return NotificationsGetResult
     */
    public function getNotificationsGetResult()
    {
        return $this->NotificationsGetResult;
    }


}

