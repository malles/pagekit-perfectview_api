<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationExistsResponse implements ResultInterface
{

    /**
     * @var RelationExistsResult
     */
    protected $RelationExistsResult = null;

    /**
     * @param RelationExistsResult $RelationExistsResult
     * @return $this
     */
    public function setRelationExistsResult($RelationExistsResult)
    {
        $this->RelationExistsResult = $RelationExistsResult;
        return $this;
    }

    /**
     * @return RelationExistsResult
     */
    public function getRelationExistsResult()
    {
        return $this->RelationExistsResult;
    }


}

