<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationUpdateResponse implements ResultInterface
{

    /**
     * @var RelationUp\DateTimeResult
     */
    protected $RelationUpdateResult = null;

    /**
     * @param RelationUp\DateTimeResult $RelationUpdateResult
     * @return $this
     */
    public function setRelationUpdateResult($RelationUpdateResult)
    {
        $this->RelationUpdateResult = $RelationUpdateResult;
        return $this;
    }

    /**
     * @return RelationUp\DateTimeResult
     */
    public function getRelationUpdateResult()
    {
        return $this->RelationUpdateResult;
    }


}

