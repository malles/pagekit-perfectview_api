<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGroupGetAllResponse implements ResultInterface
{

    /**
     * @var ProductGroupGetAllResult
     */
    protected $ProductGroupGetAllResult = null;

    /**
     * @param ProductGroupGetAllResult $ProductGroupGetAllResult
     * @return $this
     */
    public function setProductGroupGetAllResult($ProductGroupGetAllResult)
    {
        $this->ProductGroupGetAllResult = $ProductGroupGetAllResult;
        return $this;
    }

    /**
     * @return ProductGroupGetAllResult
     */
    public function getProductGroupGetAllResult()
    {
        return $this->ProductGroupGetAllResult;
    }


}

