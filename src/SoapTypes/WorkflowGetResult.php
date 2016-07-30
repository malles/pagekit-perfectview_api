<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class WorkflowGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

