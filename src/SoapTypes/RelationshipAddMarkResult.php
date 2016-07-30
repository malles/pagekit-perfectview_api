<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationshipAddMarkResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvRelationshipMarkData
     */
    protected $relationshipMark = null;

    /**
     * @param PvRelationshipMarkData $relationshipMark
     * @return $this
     */
    public function setRelationshipMark($relationshipMark)
    {
        $this->relationshipMark = $relationshipMark;
        return $this;
    }

    /**
     * @return PvRelationshipMarkData
     */
    public function getRelationshipMark()
    {
        return $this->relationshipMark;
    }


}

