<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class AttachmentUpdateResponse implements ResultInterface
{

    /**
     * @var AttachmentUp\DateTimeResult
     */
    protected $AttachmentUpdateResult = null;

    /**
     * @param AttachmentUp\DateTimeResult $AttachmentUpdateResult
     * @return $this
     */
    public function setAttachmentUpdateResult($AttachmentUpdateResult)
    {
        $this->AttachmentUpdateResult = $AttachmentUpdateResult;
        return $this;
    }

    /**
     * @return AttachmentUp\DateTimeResult
     */
    public function getAttachmentUpdateResult()
    {
        return $this->AttachmentUpdateResult;
    }


}

