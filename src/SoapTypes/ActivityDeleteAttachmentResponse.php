<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityDeleteAttachmentResponse implements ResultInterface
{

    /**
     * @var ActivityDeleteAttachmentResult
     */
    protected $ActivityDeleteAttachmentResult = null;

    /**
     * @param ActivityDeleteAttachmentResult $ActivityDeleteAttachmentResult
     * @return $this
     */
    public function setActivityDeleteAttachmentResult($ActivityDeleteAttachmentResult)
    {
        $this->ActivityDeleteAttachmentResult = $ActivityDeleteAttachmentResult;
        return $this;
    }

    /**
     * @return ActivityDeleteAttachmentResult
     */
    public function getActivityDeleteAttachmentResult()
    {
        return $this->ActivityDeleteAttachmentResult;
    }


}

