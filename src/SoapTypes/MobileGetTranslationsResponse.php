<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MobileGetTranslationsResponse implements ResultInterface
{

    /**
     * @var MobileGetTranslationsResult
     */
    protected $MobileGetTranslationsResult = null;

    /**
     * @param MobileGetTranslationsResult $MobileGetTranslationsResult
     * @return $this
     */
    public function setMobileGetTranslationsResult($MobileGetTranslationsResult)
    {
        $this->MobileGetTranslationsResult = $MobileGetTranslationsResult;
        return $this;
    }

    /**
     * @return MobileGetTranslationsResult
     */
    public function getMobileGetTranslationsResult()
    {
        return $this->MobileGetTranslationsResult;
    }


}

