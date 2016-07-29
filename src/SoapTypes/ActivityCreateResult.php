<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityCreateResult
{

    /**
     * @var PvActivityData
     */
    protected $Activity = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

    /**
     * @param PvActivityData $Activity
     * @return $this
     */
    public function setActivity($Activity)
    {
        $this->Activity = $Activity;
        return $this;
    }

    /**
     * @return PvActivityData
     */
    public function getActivity()
    {
        return $this->Activity;
    }

    /**
     * @param string $ErrorInformation
     * @return $this
     */
    public function setErrorInformation($ErrorInformation)
    {
        $this->ErrorInformation = $ErrorInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorInformation()
    {
        return $this->ErrorInformation;
    }


}

