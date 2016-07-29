<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipGetMarksResult
{

    /**
     * @var PvRelationshipData
     */
    protected $Relationship = null;

    /**
     * @var ArrayOfPvRelationshipMarkData
     */
    protected $RelationshipMarks = null;

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

    /**
     * @param ArrayOfPvRelationshipMarkData $RelationshipMarks
     * @return $this
     */
    public function setRelationshipMarks($RelationshipMarks)
    {
        $this->RelationshipMarks = $RelationshipMarks;
        return $this;
    }

    /**
     * @return ArrayOfPvRelationshipMarkData
     */
    public function getRelationshipMarks()
    {
        return $this->RelationshipMarks;
    }


}

