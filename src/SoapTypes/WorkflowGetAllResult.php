<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class WorkflowGetAllResult
{

    /**
     * @var ArrayOfPvWorkflowData
     */
    protected $Workflows = null;

    /**
     * @param ArrayOfPvWorkflowData $Workflows
     * @return $this
     */
    public function setWorkflows($Workflows)
    {
        $this->Workflows = $Workflows;
        return $this;
    }

    /**
     * @return ArrayOfPvWorkflowData
     */
    public function getWorkflows()
    {
        return $this->Workflows;
    }


}

