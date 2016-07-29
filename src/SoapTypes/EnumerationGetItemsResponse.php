<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class EnumerationGetItemsResponse implements ResultInterface
{

    /**
     * @var EnumerationGetItemsResult
     */
    protected $EnumerationGetItemsResult = null;

    /**
     * @param EnumerationGetItemsResult $EnumerationGetItemsResult
     * @return $this
     */
    public function setEnumerationGetItemsResult($EnumerationGetItemsResult)
    {
        $this->EnumerationGetItemsResult = $EnumerationGetItemsResult;
        return $this;
    }

    /**
     * @return EnumerationGetItemsResult
     */
    public function getEnumerationGetItemsResult()
    {
        return $this->EnumerationGetItemsResult;
    }


}

