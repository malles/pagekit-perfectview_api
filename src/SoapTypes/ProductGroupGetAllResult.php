<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class ProductGroupGetAllResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvProductGroupData
     */
    protected $ProductGroups = null;

    /**
     * @param ArrayOfPvProductGroupData $ProductGroups
     * @return $this
     */
    public function setProductGroups($ProductGroups)
    {
        $this->ProductGroups = $ProductGroups;
        return $this;
    }

    /**
     * @return ArrayOfPvProductGroupData
     */
    public function getProductGroups()
    {
        return $this->ProductGroups;
    }


}

