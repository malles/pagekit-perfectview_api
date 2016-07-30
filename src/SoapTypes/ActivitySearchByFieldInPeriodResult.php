<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivitySearchByFieldInPeriodResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvActivityData
     */
    protected $Activities = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

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

    /**
     * @param string $ErrorInformation
     * @return $this
     */
    public function setErrorInformation($ErrorInformation)
    {
        $this->ErrorInformation = $ErrorInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorInformation()
    {
        return $this->ErrorInformation;
    }


}

