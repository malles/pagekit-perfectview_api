<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ApiGetCallsResponse implements ResultInterface
{

    /**
     * @var ApiGetCallsResult
     */
    protected $ApiGetCallsResult = null;

    /**
     * @param ApiGetCallsResult $ApiGetCallsResult
     * @return $this
     */
    public function setApiGetCallsResult($ApiGetCallsResult)
    {
        $this->ApiGetCallsResult = $ApiGetCallsResult;
        return $this;
    }

    /**
     * @return ApiGetCallsResult
     */
    public function getApiGetCallsResult()
    {
        return $this->ApiGetCallsResult;
    }


}

