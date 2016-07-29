<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvFieldData
{

    /**
     * @var PvFieldData
     */
    protected $PvFieldData = null;

    /**
     * @param PvFieldData $PvFieldData
     * @return $this
     */
    public function setPvFieldData($PvFieldData)
    {
        $this->PvFieldData = $PvFieldData;
        return $this;
    }

    /**
     * @return PvFieldData
     */
    public function getPvFieldData()
    {
        return $this->PvFieldData;
    }


}

