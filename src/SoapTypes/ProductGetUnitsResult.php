<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGetUnitsResult
{

    /**
     * @var ArrayOfPvEnumerationItemData
     */
    protected $Units = null;

    /**
     * @param ArrayOfPvEnumerationItemData $Units
     * @return $this
     */
    public function setUnits($Units)
    {
        $this->Units = $Units;
        return $this;
    }

    /**
     * @return ArrayOfPvEnumerationItemData
     */
    public function getUnits()
    {
        return $this->Units;
    }


}

