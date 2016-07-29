<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class AttachmentUpdate implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $attachmentId = null;

    /**
     * @var string
     */
    protected $fileName = null;

    /**
     * @var string
     */
    protected $base64EncodedFile = null;

    /**
     * @param ApiCredentials $credentials
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param guid $attachmentId
     * @return $this
     */
    public function setAttachmentId($attachmentId)
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getAttachmentId()
    {
        return $this->attachmentId;
    }

    /**
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $base64EncodedFile
     * @return $this
     */
    public function setBase64EncodedFile($base64EncodedFile)
    {
        $this->base64EncodedFile = $base64EncodedFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64EncodedFile()
    {
        return $this->base64EncodedFile;
    }


}

