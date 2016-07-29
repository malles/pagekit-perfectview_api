<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipSearchByFieldResult
{

    /**
     * @var ArrayOfPvRelationshipData
     */
    protected $Relationships = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

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

