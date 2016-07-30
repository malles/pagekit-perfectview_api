<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class WorkflowStepGetResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

