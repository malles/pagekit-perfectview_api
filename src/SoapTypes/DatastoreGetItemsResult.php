<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class DatastoreGetItemsResult
{

    /**
     * @var ArrayOfPvDatastoreItemData
     */
    protected $DatastoreItems = null;

    /**
     * @param ArrayOfPvDatastoreItemData $DatastoreItems
     * @return $this
     */
    public function setDatastoreItems($DatastoreItems)
    {
        $this->DatastoreItems = $DatastoreItems;
        return $this;
    }

    /**
     * @return ArrayOfPvDatastoreItemData
     */
    public function getDatastoreItems()
    {
        return $this->DatastoreItems;
    }


}

