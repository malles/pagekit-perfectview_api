<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class FieldGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvFieldData
     */
    protected $Field = null;

    /**
     * @param PvFieldData $Field
     * @return $this
     */
    public function setField($Field)
    {
        $this->Field = $Field;
        return $this;
    }

    /**
     * @return PvFieldData
     */
    public function getField()
    {
        return $this->Field;
    }


}

