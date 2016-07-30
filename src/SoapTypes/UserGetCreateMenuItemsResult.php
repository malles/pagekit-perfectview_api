<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class UserGetCreateMenuItemsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

