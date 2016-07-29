<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfGuid
{

    /**
     * @var guid
     */
    protected $guid = null;

    /**
     * @param guid $guid
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * @return guid
     */
    public function getGuid()
    {
        return $this->guid;
    }


}

