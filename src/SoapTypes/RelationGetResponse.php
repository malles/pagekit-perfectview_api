<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetResponse implements ResultInterface
{

    /**
     * @var RelationGetResult
     */
    protected $RelationGetResult = null;

    /**
     * @param RelationGetResult $RelationGetResult
     * @return $this
     */
    public function setRelationGetResult($RelationGetResult)
    {
        $this->RelationGetResult = $RelationGetResult;
        return $this;
    }

    /**
     * @return RelationGetResult
     */
    public function getRelationGetResult()
    {
        return $this->RelationGetResult;
    }


}

