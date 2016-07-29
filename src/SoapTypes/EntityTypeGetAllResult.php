<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class EntityTypeGetAllResult
{

    /**
     * @var ArrayOfPvEntityTypeData
     */
    protected $EntityTypes = null;

    /**
     * @param ArrayOfPvEntityTypeData $EntityTypes
     * @return $this
     */
    public function setEntityTypes($EntityTypes)
    {
        $this->EntityTypes = $EntityTypes;
        return $this;
    }

    /**
     * @return ArrayOfPvEntityTypeData
     */
    public function getEntityTypes()
    {
        return $this->EntityTypes;
    }


}

