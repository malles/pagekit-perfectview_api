<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ActivityAddAttachmentResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

