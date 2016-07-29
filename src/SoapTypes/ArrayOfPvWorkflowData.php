<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class ArrayOfPvWorkflowData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var PvWorkflowData
     */
    protected $PvWorkflowData = null;

    /**
     * @param PvWorkflowData $PvWorkflowData
     * @return $this
     */
    public function setPvWorkflowData($PvWorkflowData)
    {
        $this->PvWorkflowData = $PvWorkflowData;
        return $this;
    }

    /**
     * @return PvWorkflowData
     */
    public function getPvWorkflowData()
    {
        return $this->PvWorkflowData;
    }


}

