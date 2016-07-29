<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGetVatCodesResponse implements ResultInterface
{

    /**
     * @var ProductGetVatCodesResult
     */
    protected $ProductGetVatCodesResult = null;

    /**
     * @param ProductGetVatCodesResult $ProductGetVatCodesResult
     * @return $this
     */
    public function setProductGetVatCodesResult($ProductGetVatCodesResult)
    {
        $this->ProductGetVatCodesResult = $ProductGetVatCodesResult;
        return $this;
    }

    /**
     * @return ProductGetVatCodesResult
     */
    public function getProductGetVatCodesResult()
    {
        return $this->ProductGetVatCodesResult;
    }


}

