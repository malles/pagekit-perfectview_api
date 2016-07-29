<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetAllResponse implements ResultInterface
{

    /**
     * @var RelationGetAllResult
     */
    protected $RelationGetAllResult = null;

    /**
     * @param RelationGetAllResult $RelationGetAllResult
     * @return $this
     */
    public function setRelationGetAllResult($RelationGetAllResult)
    {
        $this->RelationGetAllResult = $RelationGetAllResult;
        return $this;
    }

    /**
     * @return RelationGetAllResult
     */
    public function getRelationGetAllResult()
    {
        return $this->RelationGetAllResult;
    }


}

