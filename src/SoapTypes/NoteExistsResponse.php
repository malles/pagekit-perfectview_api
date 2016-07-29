<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class NoteExistsResponse implements ResultInterface
{

    /**
     * @var NoteExistsResult
     */
    protected $NoteExistsResult = null;

    /**
     * @param NoteExistsResult $NoteExistsResult
     * @return $this
     */
    public function setNoteExistsResult($NoteExistsResult)
    {
        $this->NoteExistsResult = $NoteExistsResult;
        return $this;
    }

    /**
     * @return NoteExistsResult
     */
    public function getNoteExistsResult()
    {
        return $this->NoteExistsResult;
    }


}

