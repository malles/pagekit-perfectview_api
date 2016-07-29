<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvAttachmentData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var \DateTime
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime
     */
    protected $ModificationDate = null;

    /**
     * @var string
     */
    protected $FileName = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $Version = null;

    /**
     * @var string
     */
    protected $Extension = null;

    /**
     * @var int
     */
    protected $ExternalDmsType = null;

    /**
     * @var string
     */
    protected $ExternalDmsId = null;

    /**
     * @var string
     */
    protected $Base64EncodedFile = null;

    /**
     * @param guid $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param \DateTime $CreationDate
     * @return $this
     */
    public function setCreationDate($CreationDate)
    {
        $this->CreationDate = $CreationDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTime $ModificationDate
     * @return $this
     */
    public function setModificationDate($ModificationDate)
    {
        $this->ModificationDate = $ModificationDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModificationDate()
    {
        return $this->ModificationDate;
    }

    /**
     * @param string $FileName
     * @return $this
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Version
     * @return $this
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Extension
     * @return $this
     */
    public function setExtension($Extension)
    {
        $this->Extension = $Extension;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * @param int $ExternalDmsType
     * @return $this
     */
    public function setExternalDmsType($ExternalDmsType)
    {
        $this->ExternalDmsType = $ExternalDmsType;
        return $this;
    }

    /**
     * @return int
     */
    public function getExternalDmsType()
    {
        return $this->ExternalDmsType;
    }

    /**
     * @param string $ExternalDmsId
     * @return $this
     */
    public function setExternalDmsId($ExternalDmsId)
    {
        $this->ExternalDmsId = $ExternalDmsId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalDmsId()
    {
        return $this->ExternalDmsId;
    }

    /**
     * @param string $Base64EncodedFile
     * @return $this
     */
    public function setBase64EncodedFile($Base64EncodedFile)
    {
        $this->Base64EncodedFile = $Base64EncodedFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64EncodedFile()
    {
        return $this->Base64EncodedFile;
    }


}

