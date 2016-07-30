<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class LanguageGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

