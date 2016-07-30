<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductLineGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

