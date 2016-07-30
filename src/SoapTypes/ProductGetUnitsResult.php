<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGetUnitsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

