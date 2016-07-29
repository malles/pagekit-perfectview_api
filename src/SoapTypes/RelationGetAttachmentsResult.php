<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationGetAttachmentsResult
{

    /**
     * @var ArrayOfPvAttachmentData
     */
    protected $Attachments = null;

    /**
     * @param ArrayOfPvAttachmentData $Attachments
     * @return $this
     */
    public function setAttachments($Attachments)
    {
        $this->Attachments = $Attachments;
        return $this;
    }

    /**
     * @return ArrayOfPvAttachmentData
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }


}

