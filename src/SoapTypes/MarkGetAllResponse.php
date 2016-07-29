<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class MarkGetAllResponse implements ResultInterface
{

    /**
     * @var MarkGetAllResult
     */
    protected $MarkGetAllResult = null;

    /**
     * @param MarkGetAllResult $MarkGetAllResult
     * @return $this
     */
    public function setMarkGetAllResult($MarkGetAllResult)
    {
        $this->MarkGetAllResult = $MarkGetAllResult;
        return $this;
    }

    /**
     * @return MarkGetAllResult
     */
    public function getMarkGetAllResult()
    {
        return $this->MarkGetAllResult;
    }


}

