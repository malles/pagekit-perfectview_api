<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RoleGetObjectRightsResult
{

    /**
     * @var ArrayOfPvObjectRightData
     */
    protected $ObjectRights = null;

    /**
     * @param ArrayOfPvObjectRightData $ObjectRights
     * @return $this
     */
    public function setObjectRights($ObjectRights)
    {
        $this->ObjectRights = $ObjectRights;
        return $this;
    }

    /**
     * @return ArrayOfPvObjectRightData
     */
    public function getObjectRights()
    {
        return $this->ObjectRights;
    }


}

