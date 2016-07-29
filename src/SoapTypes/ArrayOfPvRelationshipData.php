<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvRelationshipData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvRelationshipData
     */
    protected $PvRelationshipData = null;

    /**
     * @param PvRelationshipData $PvRelationshipData
     * @return $this
     */
    public function setPvRelationshipData($PvRelationshipData)
    {
        $this->PvRelationshipData = $PvRelationshipData;
        return $this;
    }

    /**
     * @return PvRelationshipData
     */
    public function getPvRelationshipData()
    {
        return $this->PvRelationshipData;
    }


}

