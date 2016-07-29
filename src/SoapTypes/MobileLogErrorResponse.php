<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileLogErrorResponse implements ResultInterface
{

    /**
     * @var MobileLogErrorResult
     */
    protected $MobileLogErrorResult = null;

    /**
     * @param MobileLogErrorResult $MobileLogErrorResult
     * @return $this
     */
    public function setMobileLogErrorResult($MobileLogErrorResult)
    {
        $this->MobileLogErrorResult = $MobileLogErrorResult;
        return $this;
    }

    /**
     * @return MobileLogErrorResult
     */
    public function getMobileLogErrorResult()
    {
        return $this->MobileLogErrorResult;
    }


}

