<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityGetProductLinesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

