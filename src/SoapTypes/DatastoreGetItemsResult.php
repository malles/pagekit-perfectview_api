<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class DatastoreGetItemsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

