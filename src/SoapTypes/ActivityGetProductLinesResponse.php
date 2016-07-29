<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetProductLinesResponse implements ResultInterface
{

    /**
     * @var ActivityGetProductLinesResult
     */
    protected $ActivityGetProductLinesResult = null;

    /**
     * @param ActivityGetProductLinesResult $ActivityGetProductLinesResult
     * @return $this
     */
    public function setActivityGetProductLinesResult($ActivityGetProductLinesResult)
    {
        $this->ActivityGetProductLinesResult = $ActivityGetProductLinesResult;
        return $this;
    }

    /**
     * @return ActivityGetProductLinesResult
     */
    public function getActivityGetProductLinesResult()
    {
        return $this->ActivityGetProductLinesResult;
    }


}

