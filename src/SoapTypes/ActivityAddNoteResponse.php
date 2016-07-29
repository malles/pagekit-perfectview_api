<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityAddNoteResponse implements ResultInterface
{

    /**
     * @var ActivityAddNoteResult
     */
    protected $ActivityAddNoteResult = null;

    /**
     * @param ActivityAddNoteResult $ActivityAddNoteResult
     * @return $this
     */
    public function setActivityAddNoteResult($ActivityAddNoteResult)
    {
        $this->ActivityAddNoteResult = $ActivityAddNoteResult;
        return $this;
    }

    /**
     * @return ActivityAddNoteResult
     */
    public function getActivityAddNoteResult()
    {
        return $this->ActivityAddNoteResult;
    }


}

