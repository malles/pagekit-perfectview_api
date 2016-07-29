<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UsersGetRolesResponse implements ResultInterface
{

    /**
     * @var UsersGetRolesResult
     */
    protected $UsersGetRolesResult = null;

    /**
     * @param UsersGetRolesResult $UsersGetRolesResult
     * @return $this
     */
    public function setUsersGetRolesResult($UsersGetRolesResult)
    {
        $this->UsersGetRolesResult = $UsersGetRolesResult;
        return $this;
    }

    /**
     * @return UsersGetRolesResult
     */
    public function getUsersGetRolesResult()
    {
        return $this->UsersGetRolesResult;
    }


}

