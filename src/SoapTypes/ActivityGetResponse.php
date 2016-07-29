<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetResponse implements ResultInterface
{

    /**
     * @var ActivityGetResult
     */
    protected $ActivityGetResult = null;

    /**
     * @param ActivityGetResult $ActivityGetResult
     * @return $this
     */
    public function setActivityGetResult($ActivityGetResult)
    {
        $this->ActivityGetResult = $ActivityGetResult;
        return $this;
    }

    /**
     * @return ActivityGetResult
     */
    public function getActivityGetResult()
    {
        return $this->ActivityGetResult;
    }


}

