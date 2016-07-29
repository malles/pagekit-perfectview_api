<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UserAddRolesResponse implements ResultInterface
{

    /**
     * @var UserAddRolesResult
     */
    protected $UserAddRolesResult = null;

    /**
     * @param UserAddRolesResult $UserAddRolesResult
     * @return $this
     */
    public function setUserAddRolesResult($UserAddRolesResult)
    {
        $this->UserAddRolesResult = $UserAddRolesResult;
        return $this;
    }

    /**
     * @return UserAddRolesResult
     */
    public function getUserAddRolesResult()
    {
        return $this->UserAddRolesResult;
    }


}

