<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvVatData
{

    /**
     * @var PvVatData
     */
    protected $PvVatData = null;

    /**
     * @param PvVatData $PvVatData
     * @return $this
     */
    public function setPvVatData($PvVatData)
    {
        $this->PvVatData = $PvVatData;
        return $this;
    }

    /**
     * @return PvVatData
     */
    public function getPvVatData()
    {
        return $this->PvVatData;
    }


}

