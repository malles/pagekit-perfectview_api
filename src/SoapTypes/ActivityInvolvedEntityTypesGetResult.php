<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityInvolvedEntityTypesGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

