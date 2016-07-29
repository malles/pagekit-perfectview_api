<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RoleGetAllResult
{

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

