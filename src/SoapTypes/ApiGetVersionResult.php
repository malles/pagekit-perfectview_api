<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ApiGetVersionResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

