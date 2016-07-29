<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class DatabaseHasAccessResponse implements ResultInterface
{

    /**
     * @var DatabaseHasAccessResult
     */
    protected $DatabaseHasAccessResult = null;

    /**
     * @param DatabaseHasAccessResult $DatabaseHasAccessResult
     * @return $this
     */
    public function setDatabaseHasAccessResult($DatabaseHasAccessResult)
    {
        $this->DatabaseHasAccessResult = $DatabaseHasAccessResult;
        return $this;
    }

    /**
     * @return DatabaseHasAccessResult
     */
    public function getDatabaseHasAccessResult()
    {
        return $this->DatabaseHasAccessResult;
    }


}

