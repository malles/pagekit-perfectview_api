<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileHasAccessResponse implements ResultInterface
{

    /**
     * @var MobileHasAccessResult
     */
    protected $MobileHasAccessResult = null;

    /**
     * @param MobileHasAccessResult $MobileHasAccessResult
     * @return $this
     */
    public function setMobileHasAccessResult($MobileHasAccessResult)
    {
        $this->MobileHasAccessResult = $MobileHasAccessResult;
        return $this;
    }

    /**
     * @return MobileHasAccessResult
     */
    public function getMobileHasAccessResult()
    {
        return $this->MobileHasAccessResult;
    }


}

