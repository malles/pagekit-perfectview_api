<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class WorkflowStepGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

