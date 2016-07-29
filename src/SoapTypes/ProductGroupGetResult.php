<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGroupGetResult
{

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

