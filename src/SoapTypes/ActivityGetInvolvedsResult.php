<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityGetInvolvedsResult
{

    /**
     * @var ArrayOfPvInvolvedData
     */
    protected $Involveds = null;

    /**
     * @param ArrayOfPvInvolvedData $Involveds
     * @return $this
     */
    public function setInvolveds($Involveds)
    {
        $this->Involveds = $Involveds;
        return $this;
    }

    /**
     * @return ArrayOfPvInvolvedData
     */
    public function getInvolveds()
    {
        return $this->Involveds;
    }


}

