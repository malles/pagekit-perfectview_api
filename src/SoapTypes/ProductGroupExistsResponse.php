<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ProductGroupExistsResponse implements ResultInterface
{

    /**
     * @var ProductGroupExistsResult
     */
    protected $ProductGroupExistsResult = null;

    /**
     * @param ProductGroupExistsResult $ProductGroupExistsResult
     * @return $this
     */
    public function setProductGroupExistsResult($ProductGroupExistsResult)
    {
        $this->ProductGroupExistsResult = $ProductGroupExistsResult;
        return $this;
    }

    /**
     * @return ProductGroupExistsResult
     */
    public function getProductGroupExistsResult()
    {
        return $this->ProductGroupExistsResult;
    }


}

