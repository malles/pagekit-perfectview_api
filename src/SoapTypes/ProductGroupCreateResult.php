<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductGroupCreateResult
{

    /**
     * @var PvProductGroupData
     */
    protected $ProductGroup = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

    /**
     * @param PvProductGroupData $ProductGroup
     * @return $this
     */
    public function setProductGroup($ProductGroup)
    {
        $this->ProductGroup = $ProductGroup;
        return $this;
    }

    /**
     * @return PvProductGroupData
     */
    public function getProductGroup()
    {
        return $this->ProductGroup;
    }

    /**
     * @param string $ErrorInformation
     * @return $this
     */
    public function setErrorInformation($ErrorInformation)
    {
        $this->ErrorInformation = $ErrorInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorInformation()
    {
        return $this->ErrorInformation;
    }


}

