<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class NotificationGetCountResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

