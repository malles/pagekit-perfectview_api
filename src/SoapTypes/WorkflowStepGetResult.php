<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class WorkflowStepGetResult
{

    /**
     * @var PvWorkflowStepData
     */
    protected $WorkflowStep = null;

    /**
     * @param PvWorkflowStepData $WorkflowStep
     * @return $this
     */
    public function setWorkflowStep($WorkflowStep)
    {
        $this->WorkflowStep = $WorkflowStep;
        return $this;
    }

    /**
     * @return PvWorkflowStepData
     */
    public function getWorkflowStep()
    {
        return $this->WorkflowStep;
    }


}

