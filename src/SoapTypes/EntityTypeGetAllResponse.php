<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class EntityTypeGetAllResponse implements ResultInterface
{

    /**
     * @var EntityTypeGetAllResult
     */
    protected $EntityTypeGetAllResult = null;

    /**
     * @param EntityTypeGetAllResult $EntityTypeGetAllResult
     * @return $this
     */
    public function setEntityTypeGetAllResult($EntityTypeGetAllResult)
    {
        $this->EntityTypeGetAllResult = $EntityTypeGetAllResult;
        return $this;
    }

    /**
     * @return EntityTypeGetAllResult
     */
    public function getEntityTypeGetAllResult()
    {
        return $this->EntityTypeGetAllResult;
    }


}

