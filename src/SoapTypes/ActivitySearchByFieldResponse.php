<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivitySearchByFieldResponse implements ResultInterface
{

    /**
     * @var ActivitySearchByFieldResult
     */
    protected $ActivitySearchByFieldResult = null;

    /**
     * @param ActivitySearchByFieldResult $ActivitySearchByFieldResult
     * @return $this
     */
    public function setActivitySearchByFieldResult($ActivitySearchByFieldResult)
    {
        $this->ActivitySearchByFieldResult = $ActivitySearchByFieldResult;
        return $this;
    }

    /**
     * @return ActivitySearchByFieldResult
     */
    public function getActivitySearchByFieldResult()
    {
        return $this->ActivitySearchByFieldResult;
    }


}

