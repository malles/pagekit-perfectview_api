<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationAddAttachmentResponse implements ResultInterface
{

    /**
     * @var RelationAddAttachmentResult
     */
    protected $RelationAddAttachmentResult = null;

    /**
     * @param RelationAddAttachmentResult $RelationAddAttachmentResult
     * @return $this
     */
    public function setRelationAddAttachmentResult($RelationAddAttachmentResult)
    {
        $this->RelationAddAttachmentResult = $RelationAddAttachmentResult;
        return $this;
    }

    /**
     * @return RelationAddAttachmentResult
     */
    public function getRelationAddAttachmentResult()
    {
        return $this->RelationAddAttachmentResult;
    }


}

