<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class UserGetNavigationItemsResult
{

    /**
     * @var ArrayOfPvNavigationItemData
     */
    protected $NavigationItems = null;

    /**
     * @param ArrayOfPvNavigationItemData $NavigationItems
     * @return $this
     */
    public function setNavigationItems($NavigationItems)
    {
        $this->NavigationItems = $NavigationItems;
        return $this;
    }

    /**
     * @return ArrayOfPvNavigationItemData
     */
    public function getNavigationItems()
    {
        return $this->NavigationItems;
    }


}

