<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class WorkflowGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

