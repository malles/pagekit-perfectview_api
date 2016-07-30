<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGroupGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvProductGroupData
     */
    protected $ProductGroup = null;

    /**
     * @param PvProductGroupData $ProductGroup
     * @return $this
     */
    public function setProductGroup($ProductGroup)
    {
        $this->ProductGroup = $ProductGroup;
        return $this;
    }

    /**
     * @return PvProductGroupData
     */
    public function getProductGroup()
    {
        return $this->ProductGroup;
    }


}

