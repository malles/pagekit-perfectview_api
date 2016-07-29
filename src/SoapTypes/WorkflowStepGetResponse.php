<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class WorkflowStepGetResponse implements ResultInterface
{

    /**
     * @var WorkflowStepGetResult
     */
    protected $WorkflowStepGetResult = null;

    /**
     * @param WorkflowStepGetResult $WorkflowStepGetResult
     * @return $this
     */
    public function setWorkflowStepGetResult($WorkflowStepGetResult)
    {
        $this->WorkflowStepGetResult = $WorkflowStepGetResult;
        return $this;
    }

    /**
     * @return WorkflowStepGetResult
     */
    public function getWorkflowStepGetResult()
    {
        return $this->WorkflowStepGetResult;
    }


}

