<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class MobileCreateAccountResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

