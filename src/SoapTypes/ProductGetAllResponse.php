<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetAllResponse implements ResultInterface
{

    /**
     * @var ProductGetAllResult
     */
    protected $ProductGetAllResult = null;

    /**
     * @param ProductGetAllResult $ProductGetAllResult
     * @return $this
     */
    public function setProductGetAllResult($ProductGetAllResult)
    {
        $this->ProductGetAllResult = $ProductGetAllResult;
        return $this;
    }

    /**
     * @return ProductGetAllResult
     */
    public function getProductGetAllResult()
    {
        return $this->ProductGetAllResult;
    }


}

