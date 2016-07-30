<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RoleGetObjectRightsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

