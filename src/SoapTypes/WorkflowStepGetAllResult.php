<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class WorkflowStepGetAllResult
{

    /**
     * @var ArrayOfPvWorkflowStepData
     */
    protected $WorkflowSteps = null;

    /**
     * @param ArrayOfPvWorkflowStepData $WorkflowSteps
     * @return $this
     */
    public function setWorkflowSteps($WorkflowSteps)
    {
        $this->WorkflowSteps = $WorkflowSteps;
        return $this;
    }

    /**
     * @return ArrayOfPvWorkflowStepData
     */
    public function getWorkflowSteps()
    {
        return $this->WorkflowSteps;
    }


}

