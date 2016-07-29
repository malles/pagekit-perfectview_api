<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ParameterGetResult
{

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

