<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class AttachmentExistsResponse implements ResultInterface
{

    /**
     * @var AttachmentExistsResult
     */
    protected $AttachmentExistsResult = null;

    /**
     * @param AttachmentExistsResult $AttachmentExistsResult
     * @return $this
     */
    public function setAttachmentExistsResult($AttachmentExistsResult)
    {
        $this->AttachmentExistsResult = $AttachmentExistsResult;
        return $this;
    }

    /**
     * @return AttachmentExistsResult
     */
    public function getAttachmentExistsResult()
    {
        return $this->AttachmentExistsResult;
    }


}

