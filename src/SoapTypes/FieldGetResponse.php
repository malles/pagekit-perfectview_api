<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class FieldGetResponse implements ResultInterface
{

    /**
     * @var FieldGetResult
     */
    protected $FieldGetResult = null;

    /**
     * @param FieldGetResult $FieldGetResult
     * @return $this
     */
    public function setFieldGetResult($FieldGetResult)
    {
        $this->FieldGetResult = $FieldGetResult;
        return $this;
    }

    /**
     * @return FieldGetResult
     */
    public function getFieldGetResult()
    {
        return $this->FieldGetResult;
    }


}

