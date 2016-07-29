<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvTranslationData
{

    /**
     * @var PvTranslationData
     */
    protected $PvTranslationData = null;

    /**
     * @param PvTranslationData $PvTranslationData
     * @return $this
     */
    public function setPvTranslationData($PvTranslationData)
    {
        $this->PvTranslationData = $PvTranslationData;
        return $this;
    }

    /**
     * @return PvTranslationData
     */
    public function getPvTranslationData()
    {
        return $this->PvTranslationData;
    }


}

