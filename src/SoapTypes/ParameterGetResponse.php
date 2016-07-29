<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ParameterGetResponse implements ResultInterface
{

    /**
     * @var ParameterGetResult
     */
    protected $ParameterGetResult = null;

    /**
     * @param ParameterGetResult $ParameterGetResult
     * @return $this
     */
    public function setParameterGetResult($ParameterGetResult)
    {
        $this->ParameterGetResult = $ParameterGetResult;
        return $this;
    }

    /**
     * @return ParameterGetResult
     */
    public function getParameterGetResult()
    {
        return $this->ParameterGetResult;
    }


}

