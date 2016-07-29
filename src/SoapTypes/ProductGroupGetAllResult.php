<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGroupGetAllResult
{

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

