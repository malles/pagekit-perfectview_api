<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class LanguageGetAllResponse implements ResultInterface
{

    /**
     * @var LanguageGetAllResult
     */
    protected $LanguageGetAllResult = null;

    /**
     * @param LanguageGetAllResult $LanguageGetAllResult
     * @return $this
     */
    public function setLanguageGetAllResult($LanguageGetAllResult)
    {
        $this->LanguageGetAllResult = $LanguageGetAllResult;
        return $this;
    }

    /**
     * @return LanguageGetAllResult
     */
    public function getLanguageGetAllResult()
    {
        return $this->LanguageGetAllResult;
    }


}

