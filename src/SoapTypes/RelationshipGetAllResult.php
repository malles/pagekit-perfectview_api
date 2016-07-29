<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipGetAllResult
{

    /**
     * @var ArrayOfPvRelationshipData
     */
    protected $Relationships = null;

    /**
     * @param ArrayOfPvRelationshipData $Relationships
     * @return $this
     */
    public function setRelationships($Relationships)
    {
        $this->Relationships = $Relationships;
        return $this;
    }

    /**
     * @return ArrayOfPvRelationshipData
     */
    public function getRelationships()
    {
        return $this->Relationships;
    }


}

