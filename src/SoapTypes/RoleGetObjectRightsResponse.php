<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RoleGetObjectRightsResponse implements ResultInterface
{

    /**
     * @var RoleGetObjectRightsResult
     */
    protected $RoleGetObjectRightsResult = null;

    /**
     * @param RoleGetObjectRightsResult $RoleGetObjectRightsResult
     * @return $this
     */
    public function setRoleGetObjectRightsResult($RoleGetObjectRightsResult)
    {
        $this->RoleGetObjectRightsResult = $RoleGetObjectRightsResult;
        return $this;
    }

    /**
     * @return RoleGetObjectRightsResult
     */
    public function getRoleGetObjectRightsResult()
    {
        return $this->RoleGetObjectRightsResult;
    }


}

