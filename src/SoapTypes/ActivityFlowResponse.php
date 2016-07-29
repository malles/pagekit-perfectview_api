<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityFlowResponse implements ResultInterface
{

    /**
     * @var ActivityFlowResult
     */
    protected $ActivityFlowResult = null;

    /**
     * @param ActivityFlowResult $ActivityFlowResult
     * @return $this
     */
    public function setActivityFlowResult($ActivityFlowResult)
    {
        $this->ActivityFlowResult = $ActivityFlowResult;
        return $this;
    }

    /**
     * @return ActivityFlowResult
     */
    public function getActivityFlowResult()
    {
        return $this->ActivityFlowResult;
    }


}

