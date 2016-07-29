<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvRelationData
{

    /**
     * @var PvRelationData
     */
    protected $PvRelationData = null;

    /**
     * @param PvRelationData $PvRelationData
     * @return $this
     */
    public function setPvRelationData($PvRelationData)
    {
        $this->PvRelationData = $PvRelationData;
        return $this;
    }

    /**
     * @return PvRelationData
     */
    public function getPvRelationData()
    {
        return $this->PvRelationData;
    }


}

