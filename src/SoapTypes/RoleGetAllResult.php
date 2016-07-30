<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RoleGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvRoleData
     */
    protected $Roles = null;

    /**
     * @param ArrayOfPvRoleData $Roles
     * @return $this
     */
    public function setRoles($Roles)
    {
        $this->Roles = $Roles;
        return $this;
    }

    /**
     * @return ArrayOfPvRoleData
     */
    public function getRoles()
    {
        return $this->Roles;
    }


}

