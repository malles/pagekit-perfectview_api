<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipAddMarkResult
{

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

