<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGetVatCodesResult
{

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

