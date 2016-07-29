<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class NoteUpdateResponse implements ResultInterface
{

    /**
     * @var NoteUp\DateTimeResult
     */
    protected $NoteUpdateResult = null;

    /**
     * @param NoteUp\DateTimeResult $NoteUpdateResult
     * @return $this
     */
    public function setNoteUpdateResult($NoteUpdateResult)
    {
        $this->NoteUpdateResult = $NoteUpdateResult;
        return $this;
    }

    /**
     * @return NoteUp\DateTimeResult
     */
    public function getNoteUpdateResult()
    {
        return $this->NoteUpdateResult;
    }


}

