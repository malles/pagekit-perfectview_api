<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipSearchByEmailResponse implements ResultInterface
{

    /**
     * @var RelationshipSearchByEmailResult
     */
    protected $RelationshipSearchByEmailResult = null;

    /**
     * @param RelationshipSearchByEmailResult $RelationshipSearchByEmailResult
     * @return $this
     */
    public function setRelationshipSearchByEmailResult($RelationshipSearchByEmailResult)
    {
        $this->RelationshipSearchByEmailResult = $RelationshipSearchByEmailResult;
        return $this;
    }

    /**
     * @return RelationshipSearchByEmailResult
     */
    public function getRelationshipSearchByEmailResult()
    {
        return $this->RelationshipSearchByEmailResult;
    }


}

