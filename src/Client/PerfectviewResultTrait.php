<?php

namespace Bixie\PerfectviewApi\Client;


use Bixie\PerfectviewApi\SoapTypes\PvApiResultDataOfObject;

trait PerfectviewResultTrait {
    /**
     * @var PvApiResultDataOfObject
     */
    protected $Result;

    /**
     * @return bool
     */
    public function isSuccess () {
        return $this->Result->getSucceeded();
    }

    /**
     * @return string|bool
     */
    public function getError () {
        return $this->getErrorInformation() ?: $this->Result->getDescription();
    }

    /**
     * @return string|bool
     */
    public function getErrorCode () {
        return $this->isSuccess() ? 0 : $this->Result->getCode();
    }

    /**
     * @return string
     */
    public function getErrorInformation () {
        return '';
    }

    /**
     * @return mixed
     */
    public function getResult () {
        return $this->Result;
    }

    /**
     * @param mixed $Result
     * @return $this
     */
    public function setResult ($Result) {
        $this->Result = $Result;
        return $this;
    }


}