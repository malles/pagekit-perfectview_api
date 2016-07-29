<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityAddProductLineResponse implements ResultInterface
{

    /**
     * @var ActivityAddProductLineResult
     */
    protected $ActivityAddProductLineResult = null;

    /**
     * @param ActivityAddProductLineResult $ActivityAddProductLineResult
     * @return $this
     */
    public function setActivityAddProductLineResult($ActivityAddProductLineResult)
    {
        $this->ActivityAddProductLineResult = $ActivityAddProductLineResult;
        return $this;
    }

    /**
     * @return ActivityAddProductLineResult
     */
    public function getActivityAddProductLineResult()
    {
        return $this->ActivityAddProductLineResult;
    }


}

