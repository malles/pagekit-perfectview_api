<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class UserGetCreateMenuItemsResult
{

    /**
     * @var ArrayOfPvMenuItemData
     */
    protected $MenuItems = null;

    /**
     * @param ArrayOfPvMenuItemData $MenuItems
     * @return $this
     */
    public function setMenuItems($MenuItems)
    {
        $this->MenuItems = $MenuItems;
        return $this;
    }

    /**
     * @return ArrayOfPvMenuItemData
     */
    public function getMenuItems()
    {
        return $this->MenuItems;
    }


}

