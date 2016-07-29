<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileCreateAccountResponse implements ResultInterface
{

    /**
     * @var MobileCreateAccountResult
     */
    protected $MobileCreateAccountResult = null;

    /**
     * @param MobileCreateAccountResult $MobileCreateAccountResult
     * @return $this
     */
    public function setMobileCreateAccountResult($MobileCreateAccountResult)
    {
        $this->MobileCreateAccountResult = $MobileCreateAccountResult;
        return $this;
    }

    /**
     * @return MobileCreateAccountResult
     */
    public function getMobileCreateAccountResult()
    {
        return $this->MobileCreateAccountResult;
    }


}

