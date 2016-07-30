<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

