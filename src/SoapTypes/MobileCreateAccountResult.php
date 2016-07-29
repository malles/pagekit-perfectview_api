<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MobileCreateAccountResult
{

    /**
     * @var string
     */
    protected $ValidationCode = null;

    /**
     * @param string $ValidationCode
     * @return $this
     */
    public function setValidationCode($ValidationCode)
    {
        $this->ValidationCode = $ValidationCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidationCode()
    {
        return $this->ValidationCode;
    }


}

