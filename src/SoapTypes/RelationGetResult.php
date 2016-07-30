<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var PvRelationData
     */
    protected $Relation = null;

    /**
     * @var ArrayOfPvCounterData
     */
    protected $Counters = null;

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
     * @param ArrayOfPvCounterData $Counters
     * @return $this
     */
    public function setCounters($Counters)
    {
        $this->Counters = $Counters;
        return $this;
    }

    /**
     * @return ArrayOfPvCounterData
     */
    public function getCounters()
    {
        return $this->Counters;
    }


}

