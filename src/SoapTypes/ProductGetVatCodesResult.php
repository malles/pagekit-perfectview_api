<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGetVatCodesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvVatData
     */
    protected $Vats = null;

    /**
     * @param ArrayOfPvVatData $Vats
     * @return $this
     */
    public function setVats($Vats)
    {
        $this->Vats = $Vats;
        return $this;
    }

    /**
     * @return ArrayOfPvVatData
     */
    public function getVats()
    {
        return $this->Vats;
    }


}

