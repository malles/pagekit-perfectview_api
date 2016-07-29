<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UsersGetActiveResponse implements ResultInterface
{

    /**
     * @var UsersGetActiveResult
     */
    protected $UsersGetActiveResult = null;

    /**
     * @param UsersGetActiveResult $UsersGetActiveResult
     * @return $this
     */
    public function setUsersGetActiveResult($UsersGetActiveResult)
    {
        $this->UsersGetActiveResult = $UsersGetActiveResult;
        return $this;
    }

    /**
     * @return UsersGetActiveResult
     */
    public function getUsersGetActiveResult()
    {
        return $this->UsersGetActiveResult;
    }


}

