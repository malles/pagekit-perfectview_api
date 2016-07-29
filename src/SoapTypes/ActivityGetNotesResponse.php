<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetNotesResponse implements ResultInterface
{

    /**
     * @var ActivityGetNotesResult
     */
    protected $ActivityGetNotesResult = null;

    /**
     * @param ActivityGetNotesResult $ActivityGetNotesResult
     * @return $this
     */
    public function setActivityGetNotesResult($ActivityGetNotesResult)
    {
        $this->ActivityGetNotesResult = $ActivityGetNotesResult;
        return $this;
    }

    /**
     * @return ActivityGetNotesResult
     */
    public function getActivityGetNotesResult()
    {
        return $this->ActivityGetNotesResult;
    }


}

