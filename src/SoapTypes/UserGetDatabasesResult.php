<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class UserGetDatabasesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

