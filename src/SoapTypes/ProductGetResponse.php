<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetResponse implements ResultInterface
{

    /**
     * @var ProductGetResult
     */
    protected $ProductGetResult = null;

    /**
     * @param ProductGetResult $ProductGetResult
     * @return $this
     */
    public function setProductGetResult($ProductGetResult)
    {
        $this->ProductGetResult = $ProductGetResult;
        return $this;
    }

    /**
     * @return ProductGetResult
     */
    public function getProductGetResult()
    {
        return $this->ProductGetResult;
    }


}

