<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class FieldGetResult
{

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

