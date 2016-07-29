<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityAddAttachmentResponse implements ResultInterface
{

    /**
     * @var ActivityAddAttachmentResult
     */
    protected $ActivityAddAttachmentResult = null;

    /**
     * @param ActivityAddAttachmentResult $ActivityAddAttachmentResult
     * @return $this
     */
    public function setActivityAddAttachmentResult($ActivityAddAttachmentResult)
    {
        $this->ActivityAddAttachmentResult = $ActivityAddAttachmentResult;
        return $this;
    }

    /**
     * @return ActivityAddAttachmentResult
     */
    public function getActivityAddAttachmentResult()
    {
        return $this->ActivityAddAttachmentResult;
    }


}

