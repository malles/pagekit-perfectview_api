<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class DatastoreGetItemsResponse implements ResultInterface
{

    /**
     * @var DatastoreGetItemsResult
     */
    protected $DatastoreGetItemsResult = null;

    /**
     * @param DatastoreGetItemsResult $DatastoreGetItemsResult
     * @return $this
     */
    public function setDatastoreGetItemsResult($DatastoreGetItemsResult)
    {
        $this->DatastoreGetItemsResult = $DatastoreGetItemsResult;
        return $this;
    }

    /**
     * @return DatastoreGetItemsResult
     */
    public function getDatastoreGetItemsResult()
    {
        return $this->DatastoreGetItemsResult;
    }


}

