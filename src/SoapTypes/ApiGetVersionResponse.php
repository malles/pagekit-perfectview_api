<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ApiGetVersionResponse implements ResultInterface
{

    /**
     * @var ApiGetVersionResult
     */
    protected $ApiGetVersionResult = null;

    /**
     * @param ApiGetVersionResult $ApiGetVersionResult
     * @return $this
     */
    public function setApiGetVersionResult($ApiGetVersionResult)
    {
        $this->ApiGetVersionResult = $ApiGetVersionResult;
        return $this;
    }

    /**
     * @return ApiGetVersionResult
     */
    public function getApiGetVersionResult()
    {
        return $this->ApiGetVersionResult;
    }


}

