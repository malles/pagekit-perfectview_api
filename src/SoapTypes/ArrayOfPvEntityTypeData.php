<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvEntityTypeData
{

    /**
     * @var PvEntityTypeData
     */
    protected $PvEntityTypeData = null;

    /**
     * @param PvEntityTypeData $PvEntityTypeData
     * @return $this
     */
    public function setPvEntityTypeData($PvEntityTypeData)
    {
        $this->PvEntityTypeData = $PvEntityTypeData;
        return $this;
    }

    /**
     * @return PvEntityTypeData
     */
    public function getPvEntityTypeData()
    {
        return $this->PvEntityTypeData;
    }


}

