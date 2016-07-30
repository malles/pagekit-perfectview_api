<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityAddProductLineResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

