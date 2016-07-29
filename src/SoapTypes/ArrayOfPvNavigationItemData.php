<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvNavigationItemData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvNavigationItemData
     */
    protected $PvNavigationItemData = null;

    /**
     * @param PvNavigationItemData $PvNavigationItemData
     * @return $this
     */
    public function setPvNavigationItemData($PvNavigationItemData)
    {
        $this->PvNavigationItemData = $PvNavigationItemData;
        return $this;
    }

    /**
     * @return PvNavigationItemData
     */
    public function getPvNavigationItemData()
    {
        return $this->PvNavigationItemData;
    }


}

