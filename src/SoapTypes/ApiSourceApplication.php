<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ApiSourceApplication
{

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Category = null;

    /**
     * @var string
     */
    protected $Subcategory = null;

    /**
     * @var string
     */
    protected $Version = null;

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Category
     * @return $this
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Subcategory
     * @return $this
     */
    public function setSubcategory($Subcategory)
    {
        $this->Subcategory = $Subcategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubcategory()
    {
        return $this->Subcategory;
    }

    /**
     * @param string $Version
     * @return $this
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }


}

