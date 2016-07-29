<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGetTypesResult
{

    /**
     * @var ArrayOfPvEnumerationItemData
     */
    protected $Types = null;

    /**
     * @param ArrayOfPvEnumerationItemData $Types
     * @return $this
     */
    public function setTypes($Types)
    {
        $this->Types = $Types;
        return $this;
    }

    /**
     * @return ArrayOfPvEnumerationItemData
     */
    public function getTypes()
    {
        return $this->Types;
    }


}

