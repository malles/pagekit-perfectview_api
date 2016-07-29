<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class EntityTypeGetResponse implements ResultInterface
{

    /**
     * @var EntityTypeGetResult
     */
    protected $EntityTypeGetResult = null;

    /**
     * @param EntityTypeGetResult $EntityTypeGetResult
     * @return $this
     */
    public function setEntityTypeGetResult($EntityTypeGetResult)
    {
        $this->EntityTypeGetResult = $EntityTypeGetResult;
        return $this;
    }

    /**
     * @return EntityTypeGetResult
     */
    public function getEntityTypeGetResult()
    {
        return $this->EntityTypeGetResult;
    }


}

