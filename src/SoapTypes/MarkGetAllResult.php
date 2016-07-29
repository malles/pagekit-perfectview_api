<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MarkGetAllResult
{

    /**
     * @var ArrayOfPvMarkData
     */
    protected $Marks = null;

    /**
     * @param ArrayOfPvMarkData $Marks
     * @return $this
     */
    public function setMarks($Marks)
    {
        $this->Marks = $Marks;
        return $this;
    }

    /**
     * @return ArrayOfPvMarkData
     */
    public function getMarks()
    {
        return $this->Marks;
    }


}

