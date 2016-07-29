<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class WorkflowGetQueuesResponse implements ResultInterface
{

    /**
     * @var WorkflowGetQueuesResult
     */
    protected $WorkflowGetQueuesResult = null;

    /**
     * @param WorkflowGetQueuesResult $WorkflowGetQueuesResult
     * @return $this
     */
    public function setWorkflowGetQueuesResult($WorkflowGetQueuesResult)
    {
        $this->WorkflowGetQueuesResult = $WorkflowGetQueuesResult;
        return $this;
    }

    /**
     * @return WorkflowGetQueuesResult
     */
    public function getWorkflowGetQueuesResult()
    {
        return $this->WorkflowGetQueuesResult;
    }


}

