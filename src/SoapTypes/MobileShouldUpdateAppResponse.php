<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileShouldUpdateAppResponse implements ResultInterface
{

    /**
     * @var MobileShouldUp\DateTimeAppResult
     */
    protected $MobileShouldUpdateAppResult = null;

    /**
     * @param MobileShouldUp\DateTimeAppResult $MobileShouldUpdateAppResult
     * @return $this
     */
    public function setMobileShouldUpdateAppResult($MobileShouldUpdateAppResult)
    {
        $this->MobileShouldUpdateAppResult = $MobileShouldUpdateAppResult;
        return $this;
    }

    /**
     * @return MobileShouldUp\DateTimeAppResult
     */
    public function getMobileShouldUpdateAppResult()
    {
        return $this->MobileShouldUpdateAppResult;
    }


}

