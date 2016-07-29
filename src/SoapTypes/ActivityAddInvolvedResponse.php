<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityAddInvolvedResponse implements ResultInterface
{

    /**
     * @var ActivityAddInvolvedResult
     */
    protected $ActivityAddInvolvedResult = null;

    /**
     * @param ActivityAddInvolvedResult $ActivityAddInvolvedResult
     * @return $this
     */
    public function setActivityAddInvolvedResult($ActivityAddInvolvedResult)
    {
        $this->ActivityAddInvolvedResult = $ActivityAddInvolvedResult;
        return $this;
    }

    /**
     * @return ActivityAddInvolvedResult
     */
    public function getActivityAddInvolvedResult()
    {
        return $this->ActivityAddInvolvedResult;
    }


}

