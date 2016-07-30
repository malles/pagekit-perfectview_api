<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class MobileHasAccessResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var bool
     */
    protected $HasAcces = null;

    /**
     * @param bool $HasAcces
     * @return $this
     */
    public function setHasAcces($HasAcces)
    {
        $this->HasAcces = $HasAcces;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAcces()
    {
        return $this->HasAcces;
    }


}

