<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class AttachmentExists implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var guid
     */
    protected $AttachmentId = null;

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
     * @param guid $AttachmentId
     * @return $this
     */
    public function setAttachmentId($AttachmentId)
    {
        $this->AttachmentId = $AttachmentId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getAttachmentId()
    {
        return $this->AttachmentId;
    }


}

