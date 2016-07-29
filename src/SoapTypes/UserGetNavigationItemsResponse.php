<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UserGetNavigationItemsResponse implements ResultInterface
{

    /**
     * @var UserGetNavigationItemsResult
     */
    protected $UserGetNavigationItemsResult = null;

    /**
     * @param UserGetNavigationItemsResult $UserGetNavigationItemsResult
     * @return $this
     */
    public function setUserGetNavigationItemsResult($UserGetNavigationItemsResult)
    {
        $this->UserGetNavigationItemsResult = $UserGetNavigationItemsResult;
        return $this;
    }

    /**
     * @return UserGetNavigationItemsResult
     */
    public function getUserGetNavigationItemsResult()
    {
        return $this->UserGetNavigationItemsResult;
    }


}

