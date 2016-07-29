<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetTypesResponse implements ResultInterface
{

    /**
     * @var ProductGetTypesResult
     */
    protected $ProductGetTypesResult = null;

    /**
     * @param ProductGetTypesResult $ProductGetTypesResult
     * @return $this
     */
    public function setProductGetTypesResult($ProductGetTypesResult)
    {
        $this->ProductGetTypesResult = $ProductGetTypesResult;
        return $this;
    }

    /**
     * @return ProductGetTypesResult
     */
    public function getProductGetTypesResult()
    {
        return $this->ProductGetTypesResult;
    }


}

