<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityGetNotesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

