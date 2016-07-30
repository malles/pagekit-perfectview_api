<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class NoteGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

