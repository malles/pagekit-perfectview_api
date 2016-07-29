<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class EntityTypeGetFieldsResponse implements ResultInterface
{

    /**
     * @var EntityTypeGetFieldsResult
     */
    protected $EntityTypeGetFieldsResult = null;

    /**
     * @param EntityTypeGetFieldsResult $EntityTypeGetFieldsResult
     * @return $this
     */
    public function setEntityTypeGetFieldsResult($EntityTypeGetFieldsResult)
    {
        $this->EntityTypeGetFieldsResult = $EntityTypeGetFieldsResult;
        return $this;
    }

    /**
     * @return EntityTypeGetFieldsResult
     */
    public function getEntityTypeGetFieldsResult()
    {
        return $this->EntityTypeGetFieldsResult;
    }


}

