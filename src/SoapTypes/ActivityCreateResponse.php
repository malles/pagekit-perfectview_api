<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityCreateResponse implements ResultInterface
{

    /**
     * @var ActivityCreateResult
     */
    protected $ActivityCreateResult = null;

    /**
     * @param ActivityCreateResult $ActivityCreateResult
     * @return $this
     */
    public function setActivityCreateResult($ActivityCreateResult)
    {
        $this->ActivityCreateResult = $ActivityCreateResult;
        return $this;
    }

    /**
     * @return ActivityCreateResult
     */
    public function getActivityCreateResult()
    {
        return $this->ActivityCreateResult;
    }


}

