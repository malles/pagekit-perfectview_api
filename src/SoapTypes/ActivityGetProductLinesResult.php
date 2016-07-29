<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityGetProductLinesResult
{

    /**
     * @var ArrayOfPvProductLineData
     */
    protected $ProductLines = null;

    /**
     * @param ArrayOfPvProductLineData $ProductLines
     * @return $this
     */
    public function setProductLines($ProductLines)
    {
        $this->ProductLines = $ProductLines;
        return $this;
    }

    /**
     * @return ArrayOfPvProductLineData
     */
    public function getProductLines()
    {
        return $this->ProductLines;
    }


}

