<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipCreateResponse implements ResultInterface
{

    /**
     * @var RelationshipCreateResult
     */
    protected $RelationshipCreateResult = null;

    /**
     * @param RelationshipCreateResult $RelationshipCreateResult
     * @return $this
     */
    public function setRelationshipCreateResult($RelationshipCreateResult)
    {
        $this->RelationshipCreateResult = $RelationshipCreateResult;
        return $this;
    }

    /**
     * @return RelationshipCreateResult
     */
    public function getRelationshipCreateResult()
    {
        return $this->RelationshipCreateResult;
    }


}

