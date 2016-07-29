<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvFieldValueData
{

    /**
     * @var PvFieldValueData
     */
    protected $PvFieldValueData = null;

    /**
     * @param PvFieldValueData $PvFieldValueData
     * @return $this
     */
    public function setPvFieldValueData($PvFieldValueData)
    {
        $this->PvFieldValueData = $PvFieldValueData;
        return $this;
    }

    /**
     * @return PvFieldValueData
     */
    public function getPvFieldValueData()
    {
        return $this->PvFieldValueData;
    }


}

