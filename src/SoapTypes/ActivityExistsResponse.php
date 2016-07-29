<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityExistsResponse implements ResultInterface
{

    /**
     * @var ActivityExistsResult
     */
    protected $ActivityExistsResult = null;

    /**
     * @param ActivityExistsResult $ActivityExistsResult
     * @return $this
     */
    public function setActivityExistsResult($ActivityExistsResult)
    {
        $this->ActivityExistsResult = $ActivityExistsResult;
        return $this;
    }

    /**
     * @return ActivityExistsResult
     */
    public function getActivityExistsResult()
    {
        return $this->ActivityExistsResult;
    }


}

