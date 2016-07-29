<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvActivityData
{

    /**
     * @var PvActivityData
     */
    protected $PvActivityData = null;

    /**
     * @param PvActivityData $PvActivityData
     * @return $this
     */
    public function setPvActivityData($PvActivityData)
    {
        $this->PvActivityData = $PvActivityData;
        return $this;
    }

    /**
     * @return PvActivityData
     */
    public function getPvActivityData()
    {
        return $this->PvActivityData;
    }


}

