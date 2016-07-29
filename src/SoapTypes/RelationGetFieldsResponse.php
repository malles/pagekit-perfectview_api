<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetFieldsResponse implements ResultInterface
{

    /**
     * @var RelationGetFieldsResult
     */
    protected $RelationGetFieldsResult = null;

    /**
     * @param RelationGetFieldsResult $RelationGetFieldsResult
     * @return $this
     */
    public function setRelationGetFieldsResult($RelationGetFieldsResult)
    {
        $this->RelationGetFieldsResult = $RelationGetFieldsResult;
        return $this;
    }

    /**
     * @return RelationGetFieldsResult
     */
    public function getRelationGetFieldsResult()
    {
        return $this->RelationGetFieldsResult;
    }


}

