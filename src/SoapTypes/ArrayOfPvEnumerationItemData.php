<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvEnumerationItemData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvEnumerationItemData
     */
    protected $PvEnumerationItemData = null;

    /**
     * @param PvEnumerationItemData $PvEnumerationItemData
     * @return $this
     */
    public function setPvEnumerationItemData($PvEnumerationItemData)
    {
        $this->PvEnumerationItemData = $PvEnumerationItemData;
        return $this;
    }

    /**
     * @return PvEnumerationItemData
     */
    public function getPvEnumerationItemData()
    {
        return $this->PvEnumerationItemData;
    }


}

