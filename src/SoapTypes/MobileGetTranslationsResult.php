<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class MobileGetTranslationsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

