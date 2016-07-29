<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class WorkflowGetAllResponse implements ResultInterface
{

    /**
     * @var WorkflowGetAllResult
     */
    protected $WorkflowGetAllResult = null;

    /**
     * @param WorkflowGetAllResult $WorkflowGetAllResult
     * @return $this
     */
    public function setWorkflowGetAllResult($WorkflowGetAllResult)
    {
        $this->WorkflowGetAllResult = $WorkflowGetAllResult;
        return $this;
    }

    /**
     * @return WorkflowGetAllResult
     */
    public function getWorkflowGetAllResult()
    {
        return $this->WorkflowGetAllResult;
    }


}

