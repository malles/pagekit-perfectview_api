<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class EntityTypeGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvEntityTypeData
     */
    protected $EntityTypes = null;

    /**
     * @param ArrayOfPvEntityTypeData $EntityTypes
     * @return $this
     */
    public function setEntityTypes($EntityTypes)
    {
        $this->EntityTypes = $EntityTypes;
        return $this;
    }

    /**
     * @return ArrayOfPvEntityTypeData
     */
    public function getEntityTypes()
    {
        return $this->EntityTypes;
    }


}

