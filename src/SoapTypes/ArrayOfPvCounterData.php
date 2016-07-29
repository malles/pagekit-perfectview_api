<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvCounterData
{

    /**
     * @var PvCounterData
     */
    protected $PvCounterData = null;

    /**
     * @param PvCounterData $PvCounterData
     * @return $this
     */
    public function setPvCounterData($PvCounterData)
    {
        $this->PvCounterData = $PvCounterData;
        return $this;
    }

    /**
     * @return PvCounterData
     */
    public function getPvCounterData()
    {
        return $this->PvCounterData;
    }


}

