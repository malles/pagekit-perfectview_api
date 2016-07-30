<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ParameterGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvParameterData
     */
    protected $Parameter = null;

    /**
     * @param PvParameterData $Parameter
     * @return $this
     */
    public function setParameter($Parameter)
    {
        $this->Parameter = $Parameter;
        return $this;
    }

    /**
     * @return PvParameterData
     */
    public function getParameter()
    {
        return $this->Parameter;
    }


}

