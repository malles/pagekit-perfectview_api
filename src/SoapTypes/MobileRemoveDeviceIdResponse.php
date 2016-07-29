<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileRemoveDeviceIdResponse implements ResultInterface
{

    /**
     * @var MobileRemoveDeviceIdResult
     */
    protected $MobileRemoveDeviceIdResult = null;

    /**
     * @param MobileRemoveDeviceIdResult $MobileRemoveDeviceIdResult
     * @return $this
     */
    public function setMobileRemoveDeviceIdResult($MobileRemoveDeviceIdResult)
    {
        $this->MobileRemoveDeviceIdResult = $MobileRemoveDeviceIdResult;
        return $this;
    }

    /**
     * @return MobileRemoveDeviceIdResult
     */
    public function getMobileRemoveDeviceIdResult()
    {
        return $this->MobileRemoveDeviceIdResult;
    }


}

