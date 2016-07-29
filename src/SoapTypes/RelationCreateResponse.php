<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationCreateResponse implements ResultInterface
{

    /**
     * @var RelationCreateResult
     */
    protected $RelationCreateResult = null;

    /**
     * @param RelationCreateResult $RelationCreateResult
     * @return $this
     */
    public function setRelationCreateResult($RelationCreateResult)
    {
        $this->RelationCreateResult = $RelationCreateResult;
        return $this;
    }

    /**
     * @return RelationCreateResult
     */
    public function getRelationCreateResult()
    {
        return $this->RelationCreateResult;
    }


}

