<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationGetMarksResult
{

    /**
     * @var PvRelationData
     */
    protected $Relation = null;

    /**
     * @var ArrayOfPvRelationshipMarkData
     */
    protected $RelationshipMarks = null;

    /**
     * @param PvRelationData $Relation
     * @return $this
     */
    public function setRelation($Relation)
    {
        $this->Relation = $Relation;
        return $this;
    }

    /**
     * @return PvRelationData
     */
    public function getRelation()
    {
        return $this->Relation;
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

