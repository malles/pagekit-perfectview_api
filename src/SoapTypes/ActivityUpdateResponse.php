<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityUpdateResponse implements ResultInterface
{

    /**
     * @var ActivityUp\DateTimeResult
     */
    protected $ActivityUpdateResult = null;

    /**
     * @param ActivityUp\DateTimeResult $ActivityUpdateResult
     * @return $this
     */
    public function setActivityUpdateResult($ActivityUpdateResult)
    {
        $this->ActivityUpdateResult = $ActivityUpdateResult;
        return $this;
    }

    /**
     * @return ActivityUp\DateTimeResult
     */
    public function getActivityUpdateResult()
    {
        return $this->ActivityUpdateResult;
    }


}

