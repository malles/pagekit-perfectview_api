<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivitySearchByFieldInPeriodResponse implements ResultInterface
{

    /**
     * @var ActivitySearchByFieldInPeriodResult
     */
    protected $ActivitySearchByFieldInPeriodResult = null;

    /**
     * @param ActivitySearchByFieldInPeriodResult $ActivitySearchByFieldInPeriodResult
     * @return $this
     */
    public function setActivitySearchByFieldInPeriodResult($ActivitySearchByFieldInPeriodResult)
    {
        $this->ActivitySearchByFieldInPeriodResult = $ActivitySearchByFieldInPeriodResult;
        return $this;
    }

    /**
     * @return ActivitySearchByFieldInPeriodResult
     */
    public function getActivitySearchByFieldInPeriodResult()
    {
        return $this->ActivitySearchByFieldInPeriodResult;
    }


}

