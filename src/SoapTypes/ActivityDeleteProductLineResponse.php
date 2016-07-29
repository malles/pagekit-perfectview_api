<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityDeleteProductLineResponse implements ResultInterface
{

    /**
     * @var ActivityDeleteProductLineResult
     */
    protected $ActivityDeleteProductLineResult = null;

    /**
     * @param ActivityDeleteProductLineResult $ActivityDeleteProductLineResult
     * @return $this
     */
    public function setActivityDeleteProductLineResult($ActivityDeleteProductLineResult)
    {
        $this->ActivityDeleteProductLineResult = $ActivityDeleteProductLineResult;
        return $this;
    }

    /**
     * @return ActivityDeleteProductLineResult
     */
    public function getActivityDeleteProductLineResult()
    {
        return $this->ActivityDeleteProductLineResult;
    }


}

