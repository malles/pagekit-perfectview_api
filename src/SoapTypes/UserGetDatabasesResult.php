<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class UserGetDatabasesResult
{

    /**
     * @var ArrayOfPvUserDatabase
     */
    protected $UserDatabases = null;

    /**
     * @param ArrayOfPvUserDatabase $UserDatabases
     * @return $this
     */
    public function setUserDatabases($UserDatabases)
    {
        $this->UserDatabases = $UserDatabases;
        return $this;
    }

    /**
     * @return ArrayOfPvUserDatabase
     */
    public function getUserDatabases()
    {
        return $this->UserDatabases;
    }


}

