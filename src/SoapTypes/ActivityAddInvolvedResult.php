<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityAddInvolvedResult
{

    /**
     * @var guid
     */
    protected $InvolvedId = null;

    /**
     * @param guid $InvolvedId
     * @return $this
     */
    public function setInvolvedId($InvolvedId)
    {
        $this->InvolvedId = $InvolvedId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getInvolvedId()
    {
        return $this->InvolvedId;
    }


}

