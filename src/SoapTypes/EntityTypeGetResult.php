<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class EntityTypeGetResult
{

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

