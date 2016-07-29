<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvUserData
{

    /**
     * @var PvUserData
     */
    protected $PvUserData = null;

    /**
     * @param PvUserData $PvUserData
     * @return $this
     */
    public function setPvUserData($PvUserData)
    {
        $this->PvUserData = $PvUserData;
        return $this;
    }

    /**
     * @return PvUserData
     */
    public function getPvUserData()
    {
        return $this->PvUserData;
    }


}

