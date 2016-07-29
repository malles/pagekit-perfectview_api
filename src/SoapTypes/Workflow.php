<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Workflow
{

    /**
     * @var string
     */
    protected $WorkflowName = null;

    /**
     * @var string
     */
    protected $WorkflowStepName = null;

    /**
     * @var string
     */
    protected $WorkflowQueueId = null;

    /**
     * @param string $WorkflowName
     * @return $this
     */
    public function setWorkflowName($WorkflowName)
    {
        $this->WorkflowName = $WorkflowName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkflowName()
    {
        return $this->WorkflowName;
    }

    /**
     * @param string $WorkflowStepName
     * @return $this
     */
    public function setWorkflowStepName($WorkflowStepName)
    {
        $this->WorkflowStepName = $WorkflowStepName;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkflowStepName()
    {
        return $this->WorkflowStepName;
    }

    /**
     * @param string $WorkflowQueueId
     * @return $this
     */
    public function setWorkflowQueueId($WorkflowQueueId)
    {
        $this->WorkflowQueueId = $WorkflowQueueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkflowQueueId()
    {
        return $this->WorkflowQueueId;
    }


}

