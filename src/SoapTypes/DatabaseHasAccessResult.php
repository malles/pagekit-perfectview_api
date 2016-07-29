<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class DatabaseHasAccessResult
{

    /**
     * @var bool
     */
    protected $HasAcces = null;

    /**
     * @param bool $HasAcces
     * @return $this
     */
    public function setHasAcces($HasAcces)
    {
        $this->HasAcces = $HasAcces;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasAcces()
    {
        return $this->HasAcces;
    }


}

