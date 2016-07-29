<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvDatastoreItemData
{

    /**
     * @var PvDatastoreItemData
     */
    protected $PvDatastoreItemData = null;

    /**
     * @param PvDatastoreItemData $PvDatastoreItemData
     * @return $this
     */
    public function setPvDatastoreItemData($PvDatastoreItemData)
    {
        $this->PvDatastoreItemData = $PvDatastoreItemData;
        return $this;
    }

    /**
     * @return PvDatastoreItemData
     */
    public function getPvDatastoreItemData()
    {
        return $this->PvDatastoreItemData;
    }


}

