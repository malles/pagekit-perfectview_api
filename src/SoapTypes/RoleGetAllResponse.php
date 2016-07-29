<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RoleGetAllResponse implements ResultInterface
{

    /**
     * @var RoleGetAllResult
     */
    protected $RoleGetAllResult = null;

    /**
     * @param RoleGetAllResult $RoleGetAllResult
     * @return $this
     */
    public function setRoleGetAllResult($RoleGetAllResult)
    {
        $this->RoleGetAllResult = $RoleGetAllResult;
        return $this;
    }

    /**
     * @return RoleGetAllResult
     */
    public function getRoleGetAllResult()
    {
        return $this->RoleGetAllResult;
    }


}

