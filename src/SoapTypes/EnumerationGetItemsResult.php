<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class EnumerationGetItemsResult
{

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

