<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MobileShouldUpdateAppResult
{

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

