<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipGetResult
{

    /**
     * @var PvRelationshipData
     */
    protected $Relationship = null;

    /**
     * @param PvRelationshipData $Relationship
     * @return $this
     */
    public function setRelationship($Relationship)
    {
        $this->Relationship = $Relationship;
        return $this;
    }

    /**
     * @return PvRelationshipData
     */
    public function getRelationship()
    {
        return $this->Relationship;
    }


}

