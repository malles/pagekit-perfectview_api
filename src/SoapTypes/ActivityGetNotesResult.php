<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityGetNotesResult
{

    /**
     * @var ArrayOfPvNoteData
     */
    protected $Notes = null;

    /**
     * @param ArrayOfPvNoteData $Notes
     * @return $this
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return ArrayOfPvNoteData
     */
    public function getNotes()
    {
        return $this->Notes;
    }


}

