<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvLanguageData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var string
     */
    protected $CultureCode = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Base64EncodedFlagFile = null;

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
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Base64EncodedFlagFile
     * @return $this
     */
    public function setBase64EncodedFlagFile($Base64EncodedFlagFile)
    {
        $this->Base64EncodedFlagFile = $Base64EncodedFlagFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64EncodedFlagFile()
    {
        return $this->Base64EncodedFlagFile;
    }


}

