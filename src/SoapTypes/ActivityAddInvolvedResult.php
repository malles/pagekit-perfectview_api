<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityAddInvolvedResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

