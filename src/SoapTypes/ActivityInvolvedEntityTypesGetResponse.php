<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityInvolvedEntityTypesGetResponse implements ResultInterface
{

    /**
     * @var ActivityInvolvedEntityTypesGetResult
     */
    protected $ActivityInvolvedEntityTypesGetResult = null;

    /**
     * @param ActivityInvolvedEntityTypesGetResult
     * $ActivityInvolvedEntityTypesGetResult
     * @return $this
     */
    public function setActivityInvolvedEntityTypesGetResult($ActivityInvolvedEntityTypesGetResult)
    {
        $this->ActivityInvolvedEntityTypesGetResult = $ActivityInvolvedEntityTypesGetResult;
        return $this;
    }

    /**
     * @return ActivityInvolvedEntityTypesGetResult
     */
    public function getActivityInvolvedEntityTypesGetResult()
    {
        return $this->ActivityInvolvedEntityTypesGetResult;
    }


}

