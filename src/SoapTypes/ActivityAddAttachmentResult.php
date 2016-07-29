<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ActivityAddAttachmentResult
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

