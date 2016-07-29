<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetNotes_V2Response implements ResultInterface
{

    /**
     * @var ActivityGetNotesResult
     */
    protected $ActivityGetNotes_V2Result = null;

    /**
     * @param ActivityGetNotesResult $ActivityGetNotes_V2Result
     * @return $this
     */
    public function setActivityGetNotes_V2Result($ActivityGetNotes_V2Result)
    {
        $this->ActivityGetNotes_V2Result = $ActivityGetNotes_V2Result;
        return $this;
    }

    /**
     * @return ActivityGetNotesResult
     */
    public function getActivityGetNotes_V2Result()
    {
        return $this->ActivityGetNotes_V2Result;
    }


}

