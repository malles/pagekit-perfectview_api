<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvRelationshipMarkData
{

    /**
     * @var PvRelationshipMarkData
     */
    protected $PvRelationshipMarkData = null;

    /**
     * @param PvRelationshipMarkData $PvRelationshipMarkData
     * @return $this
     */
    public function setPvRelationshipMarkData($PvRelationshipMarkData)
    {
        $this->PvRelationshipMarkData = $PvRelationshipMarkData;
        return $this;
    }

    /**
     * @return PvRelationshipMarkData
     */
    public function getPvRelationshipMarkData()
    {
        return $this->PvRelationshipMarkData;
    }


}

