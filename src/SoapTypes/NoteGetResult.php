<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class NoteGetResult
{

    /**
     * @var PvNoteData
     */
    protected $Note = null;

    /**
     * @param PvNoteData $Note
     * @return $this
     */
    public function setNote($Note)
    {
        $this->Note = $Note;
        return $this;
    }

    /**
     * @return PvNoteData
     */
    public function getNote()
    {
        return $this->Note;
    }


}

