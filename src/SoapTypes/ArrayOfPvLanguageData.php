<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvLanguageData
{

    /**
     * @var PvLanguageData
     */
    protected $PvLanguageData = null;

    /**
     * @param PvLanguageData $PvLanguageData
     * @return $this
     */
    public function setPvLanguageData($PvLanguageData)
    {
        $this->PvLanguageData = $PvLanguageData;
        return $this;
    }

    /**
     * @return PvLanguageData
     */
    public function getPvLanguageData()
    {
        return $this->PvLanguageData;
    }


}

