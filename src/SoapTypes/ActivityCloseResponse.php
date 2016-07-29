<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityCloseResponse implements ResultInterface
{

    /**
     * @var ActivityCloseResult
     */
    protected $ActivityCloseResult = null;

    /**
     * @param ActivityCloseResult $ActivityCloseResult
     * @return $this
     */
    public function setActivityCloseResult($ActivityCloseResult)
    {
        $this->ActivityCloseResult = $ActivityCloseResult;
        return $this;
    }

    /**
     * @return ActivityCloseResult
     */
    public function getActivityCloseResult()
    {
        return $this->ActivityCloseResult;
    }


}

