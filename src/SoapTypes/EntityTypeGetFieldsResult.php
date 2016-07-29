<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class EntityTypeGetFieldsResult
{

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

