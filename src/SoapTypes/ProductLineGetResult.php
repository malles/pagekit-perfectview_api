<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductLineGetResult
{

    /**
     * @var PvProductLineData
     */
    protected $ProductLine = null;

    /**
     * @param PvProductLineData $ProductLine
     * @return $this
     */
    public function setProductLine($ProductLine)
    {
        $this->ProductLine = $ProductLine;
        return $this;
    }

    /**
     * @return PvProductLineData
     */
    public function getProductLine()
    {
        return $this->ProductLine;
    }


}

