<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductUpdateResponse implements ResultInterface
{

    /**
     * @var ProductUp\DateTimeResult
     */
    protected $ProductUpdateResult = null;

    /**
     * @param ProductUp\DateTimeResult $ProductUpdateResult
     * @return $this
     */
    public function setProductUpdateResult($ProductUpdateResult)
    {
        $this->ProductUpdateResult = $ProductUpdateResult;
        return $this;
    }

    /**
     * @return ProductUp\DateTimeResult
     */
    public function getProductUpdateResult()
    {
        return $this->ProductUpdateResult;
    }


}

