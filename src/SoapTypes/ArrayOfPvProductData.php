<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvProductData
{

    /**
     * @var PvProductData
     */
    protected $PvProductData = null;

    /**
     * @param PvProductData $PvProductData
     * @return $this
     */
    public function setPvProductData($PvProductData)
    {
        $this->PvProductData = $PvProductData;
        return $this;
    }

    /**
     * @return PvProductData
     */
    public function getPvProductData()
    {
        return $this->PvProductData;
    }


}

