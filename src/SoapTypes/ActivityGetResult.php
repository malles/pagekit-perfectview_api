<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvActivityData
     */
    protected $Activity = null;

    /**
     * @var ArrayOfPvCounterData
     */
    protected $Counters = null;

    /**
     * @param PvActivityData $Activity
     * @return $this
     */
    public function setActivity($Activity)
    {
        $this->Activity = $Activity;
        return $this;
    }

    /**
     * @return PvActivityData
     */
    public function getActivity()
    {
        return $this->Activity;
    }

    /**
     * @param ArrayOfPvCounterData $Counters
     * @return $this
     */
    public function setCounters($Counters)
    {
        $this->Counters = $Counters;
        return $this;
    }

    /**
     * @return ArrayOfPvCounterData
     */
    public function getCounters()
    {
        return $this->Counters;
    }


}

