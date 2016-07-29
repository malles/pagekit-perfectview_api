<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvTranslationData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var string
     */
    protected $ResourceCode = null;

    /**
     * @var string
     */
    protected $CultureCode = null;

    /**
     * @var string
     */
    protected $Value = null;

    /**
     * @param string $ResourceCode
     * @return $this
     */
    public function setResourceCode($ResourceCode)
    {
        $this->ResourceCode = $ResourceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResourceCode()
    {
        return $this->ResourceCode;
    }

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

    /**
     * @param string $Value
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }


}

