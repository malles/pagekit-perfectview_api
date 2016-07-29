<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class AttachmentGetResult
{

    /**
     * @var PvAttachmentData
     */
    protected $Attachment = null;

    /**
     * @param PvAttachmentData $Attachment
     * @return $this
     */
    public function setAttachment($Attachment)
    {
        $this->Attachment = $Attachment;
        return $this;
    }

    /**
     * @return PvAttachmentData
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }


}

