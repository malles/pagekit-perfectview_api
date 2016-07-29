<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvMarkData
{

    /**
     * @var PvMarkData
     */
    protected $PvMarkData = null;

    /**
     * @param PvMarkData $PvMarkData
     * @return $this
     */
    public function setPvMarkData($PvMarkData)
    {
        $this->PvMarkData = $PvMarkData;
        return $this;
    }

    /**
     * @return PvMarkData
     */
    public function getPvMarkData()
    {
        return $this->PvMarkData;
    }


}

