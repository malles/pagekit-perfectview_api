<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductCreateResponse implements ResultInterface
{

    /**
     * @var ProductCreateResult
     */
    protected $ProductCreateResult = null;

    /**
     * @param ProductCreateResult $ProductCreateResult
     * @return $this
     */
    public function setProductCreateResult($ProductCreateResult)
    {
        $this->ProductCreateResult = $ProductCreateResult;
        return $this;
    }

    /**
     * @return ProductCreateResult
     */
    public function getProductCreateResult()
    {
        return $this->ProductCreateResult;
    }


}

