<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityInvolvedEntityTypesGetResult
{

    /**
     * @var ArrayOfPvEntityTypeData
     */
    protected $InvolvedEntityTypes = null;

    /**
     * @param ArrayOfPvEntityTypeData $InvolvedEntityTypes
     * @return $this
     */
    public function setInvolvedEntityTypes($InvolvedEntityTypes)
    {
        $this->InvolvedEntityTypes = $InvolvedEntityTypes;
        return $this;
    }

    /**
     * @return ArrayOfPvEntityTypeData
     */
    public function getInvolvedEntityTypes()
    {
        return $this->InvolvedEntityTypes;
    }


}

