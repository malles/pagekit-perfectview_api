<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationCreateResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvRelationshipData
     */
    protected $Relationship = null;

    /**
     * @var PvRelationData
     */
    protected $Relation = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

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
     * @param string $ErrorInformation
     * @return $this
     */
    public function setErrorInformation($ErrorInformation)
    {
        $this->ErrorInformation = $ErrorInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorInformation()
    {
        return $this->ErrorInformation;
    }


}

