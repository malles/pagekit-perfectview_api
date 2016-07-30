<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGetTypesResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

