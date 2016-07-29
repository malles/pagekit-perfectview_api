<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class LanguageGetAllResult
{

    /**
     * @var ArrayOfPvLanguageData
     */
    protected $Languages = null;

    /**
     * @param ArrayOfPvLanguageData $Languages
     * @return $this
     */
    public function setLanguages($Languages)
    {
        $this->Languages = $Languages;
        return $this;
    }

    /**
     * @return ArrayOfPvLanguageData
     */
    public function getLanguages()
    {
        return $this->Languages;
    }


}

