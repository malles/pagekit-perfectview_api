<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGroupUpdateResponse implements ResultInterface
{

    /**
     * @var ProductGroupUp\DateTimeResult
     */
    protected $ProductGroupUpdateResult = null;

    /**
     * @param ProductGroupUp\DateTimeResult $ProductGroupUpdateResult
     * @return $this
     */
    public function setProductGroupUpdateResult($ProductGroupUpdateResult)
    {
        $this->ProductGroupUpdateResult = $ProductGroupUpdateResult;
        return $this;
    }

    /**
     * @return ProductGroupUp\DateTimeResult
     */
    public function getProductGroupUpdateResult()
    {
        return $this->ProductGroupUpdateResult;
    }


}

