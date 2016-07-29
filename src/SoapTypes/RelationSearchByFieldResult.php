<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationSearchByFieldResult
{

    /**
     * @var ArrayOfPvRelationData
     */
    protected $Relations = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

    /**
     * @param ArrayOfPvRelationData $Relations
     * @return $this
     */
    public function setRelations($Relations)
    {
        $this->Relations = $Relations;
        return $this;
    }

    /**
     * @return ArrayOfPvRelationData
     */
    public function getRelations()
    {
        return $this->Relations;
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

