<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class UserAddRoles implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $userId = null;

    /**
     * @var ArrayOfGuid
     */
    protected $roleIds = null;

    /**
     * @param ApiCredentials $credentials
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param guid $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param ArrayOfGuid $roleIds
     * @return $this
     */
    public function setRoleIds($roleIds)
    {
        $this->roleIds = $roleIds;
        return $this;
    }

    /**
     * @return ArrayOfGuid
     */
    public function getRoleIds()
    {
        return $this->roleIds;
    }


}

