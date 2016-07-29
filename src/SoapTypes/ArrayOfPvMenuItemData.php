<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvMenuItemData
{

    /**
     * @var PvMenuItemData
     */
    protected $PvMenuItemData = null;

    /**
     * @param PvMenuItemData $PvMenuItemData
     * @return $this
     */
    public function setPvMenuItemData($PvMenuItemData)
    {
        $this->PvMenuItemData = $PvMenuItemData;
        return $this;
    }

    /**
     * @return PvMenuItemData
     */
    public function getPvMenuItemData()
    {
        return $this->PvMenuItemData;
    }


}

