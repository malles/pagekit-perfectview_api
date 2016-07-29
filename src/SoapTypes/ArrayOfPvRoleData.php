<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvRoleData
{

    /**
     * @var PvRoleData
     */
    protected $PvRoleData = null;

    /**
     * @param PvRoleData $PvRoleData
     * @return $this
     */
    public function setPvRoleData($PvRoleData)
    {
        $this->PvRoleData = $PvRoleData;
        return $this;
    }

    /**
     * @return PvRoleData
     */
    public function getPvRoleData()
    {
        return $this->PvRoleData;
    }


}

