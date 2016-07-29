<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetInvolvedsResponse implements ResultInterface
{

    /**
     * @var ActivityGetInvolvedsResult
     */
    protected $ActivityGetInvolvedsResult = null;

    /**
     * @param ActivityGetInvolvedsResult $ActivityGetInvolvedsResult
     * @return $this
     */
    public function setActivityGetInvolvedsResult($ActivityGetInvolvedsResult)
    {
        $this->ActivityGetInvolvedsResult = $ActivityGetInvolvedsResult;
        return $this;
    }

    /**
     * @return ActivityGetInvolvedsResult
     */
    public function getActivityGetInvolvedsResult()
    {
        return $this->ActivityGetInvolvedsResult;
    }


}

