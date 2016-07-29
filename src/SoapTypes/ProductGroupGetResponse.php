<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGroupGetResponse implements ResultInterface
{

    /**
     * @var ProductGroupGetResult
     */
    protected $ProductGroupGetResult = null;

    /**
     * @param ProductGroupGetResult $ProductGroupGetResult
     * @return $this
     */
    public function setProductGroupGetResult($ProductGroupGetResult)
    {
        $this->ProductGroupGetResult = $ProductGroupGetResult;
        return $this;
    }

    /**
     * @return ProductGroupGetResult
     */
    public function getProductGroupGetResult()
    {
        return $this->ProductGroupGetResult;
    }


}

