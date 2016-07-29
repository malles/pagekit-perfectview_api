<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvInvolvedData
{

    /**
     * @var PvInvolvedData
     */
    protected $PvInvolvedData = null;

    /**
     * @param PvInvolvedData $PvInvolvedData
     * @return $this
     */
    public function setPvInvolvedData($PvInvolvedData)
    {
        $this->PvInvolvedData = $PvInvolvedData;
        return $this;
    }

    /**
     * @return PvInvolvedData
     */
    public function getPvInvolvedData()
    {
        return $this->PvInvolvedData;
    }


}

