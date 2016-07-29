<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class WorkflowGetQueuesResult
{

    /**
     * @var ArrayOfPvQueueData
     */
    protected $Queues = null;

    /**
     * @param ArrayOfPvQueueData $Queues
     * @return $this
     */
    public function setQueues($Queues)
    {
        $this->Queues = $Queues;
        return $this;
    }

    /**
     * @return ArrayOfPvQueueData
     */
    public function getQueues()
    {
        return $this->Queues;
    }


}

