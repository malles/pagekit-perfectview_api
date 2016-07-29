<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ApiGetVersionResult
{

    /**
     * @var string
     */
    protected $Version = null;

    /**
     * @param string $Version
     * @return $this
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }


}

