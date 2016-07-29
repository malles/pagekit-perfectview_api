<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityUpdateResult
{

    /**
     * @var string
     */
    protected $ErrorInformation = null;

    /**
     * @var string
     */
    protected $Info = null;

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

    /**
     * @param string $Info
     * @return $this
     */
    public function setInfo($Info)
    {
        $this->Info = $Info;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->Info;
    }


}

