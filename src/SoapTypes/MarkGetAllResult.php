<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class MarkGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

