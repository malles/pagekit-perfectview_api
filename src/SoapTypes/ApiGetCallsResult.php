<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ApiGetCallsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

