<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGroupCreateResponse implements ResultInterface
{

    /**
     * @var ProductGroupCreateResult
     */
    protected $ProductGroupCreateResult = null;

    /**
     * @param ProductGroupCreateResult $ProductGroupCreateResult
     * @return $this
     */
    public function setProductGroupCreateResult($ProductGroupCreateResult)
    {
        $this->ProductGroupCreateResult = $ProductGroupCreateResult;
        return $this;
    }

    /**
     * @return ProductGroupCreateResult
     */
    public function getProductGroupCreateResult()
    {
        return $this->ProductGroupCreateResult;
    }


}

