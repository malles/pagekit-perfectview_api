<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class WorkflowGetQueuesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

