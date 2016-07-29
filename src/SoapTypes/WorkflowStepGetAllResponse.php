<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class WorkflowStepGetAllResponse implements ResultInterface
{

    /**
     * @var WorkflowStepGetAllResult
     */
    protected $WorkflowStepGetAllResult = null;

    /**
     * @param WorkflowStepGetAllResult $WorkflowStepGetAllResult
     * @return $this
     */
    public function setWorkflowStepGetAllResult($WorkflowStepGetAllResult)
    {
        $this->WorkflowStepGetAllResult = $WorkflowStepGetAllResult;
        return $this;
    }

    /**
     * @return WorkflowStepGetAllResult
     */
    public function getWorkflowStepGetAllResult()
    {
        return $this->WorkflowStepGetAllResult;
    }


}

