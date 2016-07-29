<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class AttachmentGetGoogleDocsUrlResponse implements ResultInterface
{

    /**
     * @var AttachmentGetGoogleDocsUrlResult
     */
    protected $AttachmentGetGoogleDocsUrlResult = null;

    /**
     * @param AttachmentGetGoogleDocsUrlResult $AttachmentGetGoogleDocsUrlResult
     * @return $this
     */
    public function setAttachmentGetGoogleDocsUrlResult($AttachmentGetGoogleDocsUrlResult)
    {
        $this->AttachmentGetGoogleDocsUrlResult = $AttachmentGetGoogleDocsUrlResult;
        return $this;
    }

    /**
     * @return AttachmentGetGoogleDocsUrlResult
     */
    public function getAttachmentGetGoogleDocsUrlResult()
    {
        return $this->AttachmentGetGoogleDocsUrlResult;
    }


}

