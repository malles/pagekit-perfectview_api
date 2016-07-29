<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetUnitsResponse implements ResultInterface
{

    /**
     * @var ProductGetUnitsResult
     */
    protected $ProductGetUnitsResult = null;

    /**
     * @param ProductGetUnitsResult $ProductGetUnitsResult
     * @return $this
     */
    public function setProductGetUnitsResult($ProductGetUnitsResult)
    {
        $this->ProductGetUnitsResult = $ProductGetUnitsResult;
        return $this;
    }

    /**
     * @return ProductGetUnitsResult
     */
    public function getProductGetUnitsResult()
    {
        return $this->ProductGetUnitsResult;
    }


}

