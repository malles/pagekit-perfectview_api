<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGroupUpdateResult
{

    /**
     * @var string
     */
    protected $ErrorInformation = null;

    /**
     * @param string $ErrorInformation
     * @return $this
     */
    public function setErrorInformation($ErrorInformation)
    {
        $this->ErrorInformation = $ErrorInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorInformation()
    {
        return $this->ErrorInformation;
    }


}

