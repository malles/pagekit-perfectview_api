<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvViewDefinitionData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvViewDefinitionData
     */
    protected $PvViewDefinitionData = null;

    /**
     * @param PvViewDefinitionData $PvViewDefinitionData
     * @return $this
     */
    public function setPvViewDefinitionData($PvViewDefinitionData)
    {
        $this->PvViewDefinitionData = $PvViewDefinitionData;
        return $this;
    }

    /**
     * @return PvViewDefinitionData
     */
    public function getPvViewDefinitionData()
    {
        return $this->PvViewDefinitionData;
    }


}

