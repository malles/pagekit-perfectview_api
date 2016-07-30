<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityGetAttachmentsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

