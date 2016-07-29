<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductExistsResponse implements ResultInterface
{

    /**
     * @var ProductExistsResult
     */
    protected $ProductExistsResult = null;

    /**
     * @param ProductExistsResult $ProductExistsResult
     * @return $this
     */
    public function setProductExistsResult($ProductExistsResult)
    {
        $this->ProductExistsResult = $ProductExistsResult;
        return $this;
    }

    /**
     * @return ProductExistsResult
     */
    public function getProductExistsResult()
    {
        return $this->ProductExistsResult;
    }


}

