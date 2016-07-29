<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetAllByGroupResponse implements ResultInterface
{

    /**
     * @var ProductGetAllByGroupResult
     */
    protected $ProductGetAllByGroupResult = null;

    /**
     * @param ProductGetAllByGroupResult $ProductGetAllByGroupResult
     * @return $this
     */
    public function setProductGetAllByGroupResult($ProductGetAllByGroupResult)
    {
        $this->ProductGetAllByGroupResult = $ProductGetAllByGroupResult;
        return $this;
    }

    /**
     * @return ProductGetAllByGroupResult
     */
    public function getProductGetAllByGroupResult()
    {
        return $this->ProductGetAllByGroupResult;
    }


}

