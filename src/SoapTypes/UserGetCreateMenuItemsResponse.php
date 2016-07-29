<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UserGetCreateMenuItemsResponse implements ResultInterface
{

    /**
     * @var UserGetCreateMenuItemsResult
     */
    protected $UserGetCreateMenuItemsResult = null;

    /**
     * @param UserGetCreateMenuItemsResult $UserGetCreateMenuItemsResult
     * @return $this
     */
    public function setUserGetCreateMenuItemsResult($UserGetCreateMenuItemsResult)
    {
        $this->UserGetCreateMenuItemsResult = $UserGetCreateMenuItemsResult;
        return $this;
    }

    /**
     * @return UserGetCreateMenuItemsResult
     */
    public function getUserGetCreateMenuItemsResult()
    {
        return $this->UserGetCreateMenuItemsResult;
    }


}

