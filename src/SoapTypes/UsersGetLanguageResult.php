<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class UsersGetLanguageResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

