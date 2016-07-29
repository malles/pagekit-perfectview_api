<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetFieldsResponse implements ResultInterface
{

    /**
     * @var ActivityGetFieldsResult
     */
    protected $ActivityGetFieldsResult = null;

    /**
     * @param ActivityGetFieldsResult $ActivityGetFieldsResult
     * @return $this
     */
    public function setActivityGetFieldsResult($ActivityGetFieldsResult)
    {
        $this->ActivityGetFieldsResult = $ActivityGetFieldsResult;
        return $this;
    }

    /**
     * @return ActivityGetFieldsResult
     */
    public function getActivityGetFieldsResult()
    {
        return $this->ActivityGetFieldsResult;
    }


}

