<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationshipGetFieldsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvFieldData
     */
    protected $Fields = null;

    /**
     * @param ArrayOfPvFieldData $Fields
     * @return $this
     */
    public function setFields($Fields)
    {
        $this->Fields = $Fields;
        return $this;
    }

    /**
     * @return ArrayOfPvFieldData
     */
    public function getFields()
    {
        return $this->Fields;
    }


}

