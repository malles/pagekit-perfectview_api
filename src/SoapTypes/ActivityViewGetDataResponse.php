<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityViewGetDataResponse implements ResultInterface
{

    /**
     * @var ActivityViewGetDataResult
     */
    protected $ActivityViewGetDataResult = null;

    /**
     * @param ActivityViewGetDataResult $ActivityViewGetDataResult
     * @return $this
     */
    public function setActivityViewGetDataResult($ActivityViewGetDataResult)
    {
        $this->ActivityViewGetDataResult = $ActivityViewGetDataResult;
        return $this;
    }

    /**
     * @return ActivityViewGetDataResult
     */
    public function getActivityViewGetDataResult()
    {
        return $this->ActivityViewGetDataResult;
    }


}

