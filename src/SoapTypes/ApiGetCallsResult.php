<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ApiGetCallsResult
{

    /**
     * @var int
     */
    protected $UsedCallsToday = null;

    /**
     * @param int $UsedCallsToday
     * @return $this
     */
    public function setUsedCallsToday($UsedCallsToday)
    {
        $this->UsedCallsToday = $UsedCallsToday;
        return $this;
    }

    /**
     * @return int
     */
    public function getUsedCallsToday()
    {
        return $this->UsedCallsToday;
    }


}

