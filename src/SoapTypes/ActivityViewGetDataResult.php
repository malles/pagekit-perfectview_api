<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityViewGetDataResult
{

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

