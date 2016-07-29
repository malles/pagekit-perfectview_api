<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class ActivityGetAttachmentsResponse implements ResultInterface
{

    /**
     * @var ActivityGetAttachmentsResult
     */
    protected $ActivityGetAttachmentsResult = null;

    /**
     * @param ActivityGetAttachmentsResult $ActivityGetAttachmentsResult
     * @return $this
     */
    public function setActivityGetAttachmentsResult($ActivityGetAttachmentsResult)
    {
        $this->ActivityGetAttachmentsResult = $ActivityGetAttachmentsResult;
        return $this;
    }

    /**
     * @return ActivityGetAttachmentsResult
     */
    public function getActivityGetAttachmentsResult()
    {
        return $this->ActivityGetAttachmentsResult;
    }


}

