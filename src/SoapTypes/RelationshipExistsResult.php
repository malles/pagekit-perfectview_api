<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipExistsResult
{

    /**
     * @var bool
     */
    protected $Exists = null;

    /**
     * @param bool $Exists
     * @return $this
     */
    public function setExists($Exists)
    {
        $this->Exists = $Exists;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExists()
    {
        return $this->Exists;
    }


}

