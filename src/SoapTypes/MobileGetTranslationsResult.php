<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class MobileGetTranslationsResult
{

    /**
     * @var ArrayOfPvTranslationData
     */
    protected $Translations = null;

    /**
     * @param ArrayOfPvTranslationData $Translations
     * @return $this
     */
    public function setTranslations($Translations)
    {
        $this->Translations = $Translations;
        return $this;
    }

    /**
     * @return ArrayOfPvTranslationData
     */
    public function getTranslations()
    {
        return $this->Translations;
    }


}

