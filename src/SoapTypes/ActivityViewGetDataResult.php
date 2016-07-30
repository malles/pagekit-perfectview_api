<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityViewGetDataResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvActivityData
     */
    protected $Activities = null;

    /**
     * @param ArrayOfPvActivityData $Activities
     * @return $this
     */
    public function setActivities($Activities)
    {
        $this->Activities = $Activities;
        return $this;
    }

    /**
     * @return ArrayOfPvActivityData
     */
    public function getActivities()
    {
        return $this->Activities;
    }


}

