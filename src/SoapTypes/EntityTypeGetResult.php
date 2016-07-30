<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class EntityTypeGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvEntityTypeData
     */
    protected $EntityType = null;

    /**
     * @param PvEntityTypeData $EntityType
     * @return $this
     */
    public function setEntityType($EntityType)
    {
        $this->EntityType = $EntityType;
        return $this;
    }

    /**
     * @return PvEntityTypeData
     */
    public function getEntityType()
    {
        return $this->EntityType;
    }


}

