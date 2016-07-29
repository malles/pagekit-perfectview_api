<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class AttachmentGetResponse implements ResultInterface
{

    /**
     * @var AttachmentGetResult
     */
    protected $AttachmentGetResult = null;

    /**
     * @param AttachmentGetResult $AttachmentGetResult
     * @return $this
     */
    public function setAttachmentGetResult($AttachmentGetResult)
    {
        $this->AttachmentGetResult = $AttachmentGetResult;
        return $this;
    }

    /**
     * @return AttachmentGetResult
     */
    public function getAttachmentGetResult()
    {
        return $this->AttachmentGetResult;
    }


}

