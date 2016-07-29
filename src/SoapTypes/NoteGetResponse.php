<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class NoteGetResponse implements ResultInterface
{

    /**
     * @var NoteGetResult
     */
    protected $NoteGetResult = null;

    /**
     * @param NoteGetResult $NoteGetResult
     * @return $this
     */
    public function setNoteGetResult($NoteGetResult)
    {
        $this->NoteGetResult = $NoteGetResult;
        return $this;
    }

    /**
     * @return NoteGetResult
     */
    public function getNoteGetResult()
    {
        return $this->NoteGetResult;
    }


}

