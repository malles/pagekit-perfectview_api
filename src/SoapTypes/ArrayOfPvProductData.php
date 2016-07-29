<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvProductData implements \JsonSerializable
{

    use JsonSerializableTrait;

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

