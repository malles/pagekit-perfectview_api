<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class UsersGetActiveResult
{

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

