<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvProductLineData
{

    /**
     * @var PvProductLineData
     */
    protected $PvProductLineData = null;

    /**
     * @param PvProductLineData $PvProductLineData
     * @return $this
     */
    public function setPvProductLineData($PvProductLineData)
    {
        $this->PvProductLineData = $PvProductLineData;
        return $this;
    }

    /**
     * @return PvProductLineData
     */
    public function getPvProductLineData()
    {
        return $this->PvProductLineData;
    }


}

