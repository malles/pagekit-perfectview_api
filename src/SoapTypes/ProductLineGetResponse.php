<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductLineGetResponse implements ResultInterface
{

    /**
     * @var ProductLineGetResult
     */
    protected $ProductLineGetResult = null;

    /**
     * @param ProductLineGetResult $ProductLineGetResult
     * @return $this
     */
    public function setProductLineGetResult($ProductLineGetResult)
    {
        $this->ProductLineGetResult = $ProductLineGetResult;
        return $this;
    }

    /**
     * @return ProductLineGetResult
     */
    public function getProductLineGetResult()
    {
        return $this->ProductLineGetResult;
    }


}

