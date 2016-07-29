<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class UsersGetLanguageResult
{

    /**
     * @var string
     */
    protected $CultureCode = null;

    /**
     * @param string $CultureCode
     * @return $this
     */
    public function setCultureCode($CultureCode)
    {
        $this->CultureCode = $CultureCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCultureCode()
    {
        return $this->CultureCode;
    }


}

