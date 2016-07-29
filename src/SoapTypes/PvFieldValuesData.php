<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvFieldValuesData
{

    /**
     * @var ArrayOfPvFieldValueData
     */
    protected $Items = null;

    /**
     * @param ArrayOfPvFieldValueData $Items
     * @return $this
     */
    public function setItems($Items)
    {
        $this->Items = $Items;
        return $this;
    }

    /**
     * @return ArrayOfPvFieldValueData
     */
    public function getItems()
    {
        return $this->Items;
    }


}

