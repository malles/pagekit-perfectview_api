<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityAddProductLineResult
{

    /**
     * @var PvProductLineData
     */
    protected $ProductLineData = null;

    /**
     * @param PvProductLineData $ProductLineData
     * @return $this
     */
    public function setProductLineData($ProductLineData)
    {
        $this->ProductLineData = $ProductLineData;
        return $this;
    }

    /**
     * @return PvProductLineData
     */
    public function getProductLineData()
    {
        return $this->ProductLineData;
    }


}

