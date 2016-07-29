<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvWorkflowStepData
{

    /**
     * @var PvWorkflowStepData
     */
    protected $PvWorkflowStepData = null;

    /**
     * @param PvWorkflowStepData $PvWorkflowStepData
     * @return $this
     */
    public function setPvWorkflowStepData($PvWorkflowStepData)
    {
        $this->PvWorkflowStepData = $PvWorkflowStepData;
        return $this;
    }

    /**
     * @return PvWorkflowStepData
     */
    public function getPvWorkflowStepData()
    {
        return $this->PvWorkflowStepData;
    }


}

