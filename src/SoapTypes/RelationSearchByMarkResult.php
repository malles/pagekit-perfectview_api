<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationSearchByMarkResult
{

    /**
     * @var ArrayOfPvRelationData
     */
    protected $Relations = null;

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


}

