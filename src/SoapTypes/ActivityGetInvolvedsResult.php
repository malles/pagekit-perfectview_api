<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityGetInvolvedsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

