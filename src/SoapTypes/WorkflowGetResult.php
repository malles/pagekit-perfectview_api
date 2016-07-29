<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class WorkflowGetResult
{

    /**
     * @var PvWorkflowData
     */
    protected $Workflow = null;

    /**
     * @param PvWorkflowData $Workflow
     * @return $this
     */
    public function setWorkflow($Workflow)
    {
        $this->Workflow = $Workflow;
        return $this;
    }

    /**
     * @return PvWorkflowData
     */
    public function getWorkflow()
    {
        return $this->Workflow;
    }


}

