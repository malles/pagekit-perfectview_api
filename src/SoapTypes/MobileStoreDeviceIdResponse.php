<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileStoreDeviceIdResponse implements ResultInterface
{

    /**
     * @var MobileStoreDeviceIdResult
     */
    protected $MobileStoreDeviceIdResult = null;

    /**
     * @param MobileStoreDeviceIdResult $MobileStoreDeviceIdResult
     * @return $this
     */
    public function setMobileStoreDeviceIdResult($MobileStoreDeviceIdResult)
    {
        $this->MobileStoreDeviceIdResult = $MobileStoreDeviceIdResult;
        return $this;
    }

    /**
     * @return MobileStoreDeviceIdResult
     */
    public function getMobileStoreDeviceIdResult()
    {
        return $this->MobileStoreDeviceIdResult;
    }


}

