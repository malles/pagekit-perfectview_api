<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetAttachmentsResponse implements ResultInterface
{

    /**
     * @var RelationGetAttachmentsResult
     */
    protected $RelationGetAttachmentsResult = null;

    /**
     * @param RelationGetAttachmentsResult $RelationGetAttachmentsResult
     * @return $this
     */
    public function setRelationGetAttachmentsResult($RelationGetAttachmentsResult)
    {
        $this->RelationGetAttachmentsResult = $RelationGetAttachmentsResult;
        return $this;
    }

    /**
     * @return RelationGetAttachmentsResult
     */
    public function getRelationGetAttachmentsResult()
    {
        return $this->RelationGetAttachmentsResult;
    }


}

