<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UserGetDatabasesResponse implements ResultInterface
{

    /**
     * @var UserGetDatabasesResult
     */
    protected $UserGetDatabasesResult = null;

    /**
     * @param UserGetDatabasesResult $UserGetDatabasesResult
     * @return $this
     */
    public function setUserGetDatabasesResult($UserGetDatabasesResult)
    {
        $this->UserGetDatabasesResult = $UserGetDatabasesResult;
        return $this;
    }

    /**
     * @return UserGetDatabasesResult
     */
    public function getUserGetDatabasesResult()
    {
        return $this->UserGetDatabasesResult;
    }


}

