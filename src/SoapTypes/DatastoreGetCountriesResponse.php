<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class DatastoreGetCountriesResponse implements ResultInterface
{

    /**
     * @var DatastoreGetCountriesResult
     */
    protected $DatastoreGetCountriesResult = null;

    /**
     * @param DatastoreGetCountriesResult $DatastoreGetCountriesResult
     * @return $this
     */
    public function setDatastoreGetCountriesResult($DatastoreGetCountriesResult)
    {
        $this->DatastoreGetCountriesResult = $DatastoreGetCountriesResult;
        return $this;
    }

    /**
     * @return DatastoreGetCountriesResult
     */
    public function getDatastoreGetCountriesResult()
    {
        return $this->DatastoreGetCountriesResult;
    }


}

