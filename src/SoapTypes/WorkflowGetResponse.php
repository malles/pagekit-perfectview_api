<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class WorkflowGetResponse implements ResultInterface
{

    /**
     * @var WorkflowGetResult
     */
    protected $WorkflowGetResult = null;

    /**
     * @param WorkflowGetResult $WorkflowGetResult
     * @return $this
     */
    public function setWorkflowGetResult($WorkflowGetResult)
    {
        $this->WorkflowGetResult = $WorkflowGetResult;
        return $this;
    }

    /**
     * @return WorkflowGetResult
     */
    public function getWorkflowGetResult()
    {
        return $this->WorkflowGetResult;
    }


}

