<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityDeleteProductLinesResponse implements ResultInterface
{

    /**
     * @var ActivityDeleteProductLinesResult
     */
    protected $ActivityDeleteProductLinesResult = null;

    /**
     * @param ActivityDeleteProductLinesResult $ActivityDeleteProductLinesResult
     * @return $this
     */
    public function setActivityDeleteProductLinesResult($ActivityDeleteProductLinesResult)
    {
        $this->ActivityDeleteProductLinesResult = $ActivityDeleteProductLinesResult;
        return $this;
    }

    /**
     * @return ActivityDeleteProductLinesResult
     */
    public function getActivityDeleteProductLinesResult()
    {
        return $this->ActivityDeleteProductLinesResult;
    }


}

