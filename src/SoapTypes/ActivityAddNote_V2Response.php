<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityAddNote_V2Response implements ResultInterface
{

    /**
     * @var ActivityAddNoteResult
     */
    protected $ActivityAddNote_V2Result = null;

    /**
     * @param ActivityAddNoteResult $ActivityAddNote_V2Result
     * @return $this
     */
    public function setActivityAddNote_V2Result($ActivityAddNote_V2Result)
    {
        $this->ActivityAddNote_V2Result = $ActivityAddNote_V2Result;
        return $this;
    }

    /**
     * @return ActivityAddNoteResult
     */
    public function getActivityAddNote_V2Result()
    {
        return $this->ActivityAddNote_V2Result;
    }


}

