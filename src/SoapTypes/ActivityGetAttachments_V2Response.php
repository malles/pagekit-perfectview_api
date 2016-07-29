<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetAttachments_V2Response implements ResultInterface
{

    /**
     * @var ActivityGetAttachmentsResult
     */
    protected $ActivityGetAttachments_V2Result = null;

    /**
     * @param ActivityGetAttachmentsResult $ActivityGetAttachments_V2Result
     * @return $this
     */
    public function setActivityGetAttachments_V2Result($ActivityGetAttachments_V2Result)
    {
        $this->ActivityGetAttachments_V2Result = $ActivityGetAttachments_V2Result;
        return $this;
    }

    /**
     * @return ActivityGetAttachmentsResult
     */
    public function getActivityGetAttachments_V2Result()
    {
        return $this->ActivityGetAttachments_V2Result;
    }


}

