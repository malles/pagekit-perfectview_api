<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class EnumerationGetItemsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvEnumerationItemData
     */
    protected $EnumerationItems = null;

    /**
     * @param ArrayOfPvEnumerationItemData $EnumerationItems
     * @return $this
     */
    public function setEnumerationItems($EnumerationItems)
    {
        $this->EnumerationItems = $EnumerationItems;
        return $this;
    }

    /**
     * @return ArrayOfPvEnumerationItemData
     */
    public function getEnumerationItems()
    {
        return $this->EnumerationItems;
    }


}

