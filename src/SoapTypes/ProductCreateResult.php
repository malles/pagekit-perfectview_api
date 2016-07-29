<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ProductCreateResult
{

    /**
     * @var PvProductData
     */
    protected $Product = null;

    /**
     * @var string
     */
    protected $ErrorInformation = null;

    /**
     * @param PvProductData $Product
     * @return $this
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
        return $this;
    }

    /**
     * @return PvProductData
     */
    public function getProduct()
    {
        return $this->Product;
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

