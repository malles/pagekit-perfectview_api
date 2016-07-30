<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class MobileShouldUpdateAppResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var bool
     */
    protected $ShouldUpdateApp = null;

    /**
     * @param bool $ShouldUpdateApp
     * @return $this
     */
    public function setShouldUpdateApp($ShouldUpdateApp)
    {
        $this->ShouldUpdateApp = $ShouldUpdateApp;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShouldUpdateApp()
    {
        return $this->ShouldUpdateApp;
    }


}

