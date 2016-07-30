<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class UserGetNavigationItemsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

