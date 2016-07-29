<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvRelationshipMarkData implements \JsonSerializable
{

    use JsonSerializableTrait;

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

