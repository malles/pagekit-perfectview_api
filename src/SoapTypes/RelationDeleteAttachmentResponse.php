<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationDeleteAttachmentResponse implements ResultInterface
{

    /**
     * @var RelationDeleteAttachmentResult
     */
    protected $RelationDeleteAttachmentResult = null;

    /**
     * @param RelationDeleteAttachmentResult $RelationDeleteAttachmentResult
     * @return $this
     */
    public function setRelationDeleteAttachmentResult($RelationDeleteAttachmentResult)
    {
        $this->RelationDeleteAttachmentResult = $RelationDeleteAttachmentResult;
        return $this;
    }

    /**
     * @return RelationDeleteAttachmentResult
     */
    public function getRelationDeleteAttachmentResult()
    {
        return $this->RelationDeleteAttachmentResult;
    }


}

