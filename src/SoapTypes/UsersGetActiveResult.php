<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class UsersGetActiveResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvUserData
     */
    protected $Users = null;

    /**
     * @param ArrayOfPvUserData $Users
     * @return $this
     */
    public function setUsers($Users)
    {
        $this->Users = $Users;
        return $this;
    }

    /**
     * @return ArrayOfPvUserData
     */
    public function getUsers()
    {
        return $this->Users;
    }


}

