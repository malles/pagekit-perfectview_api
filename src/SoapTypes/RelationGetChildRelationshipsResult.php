<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationGetChildRelationshipsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

