<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvProductData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $ProductGroupId = null;

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var ProductType
     */
    protected $ProductType = null;

    /**
     * @var UnitType
     */
    protected $UnitType = null;

    /**
     * @var bool
     */
    protected $IsDivisible = null;

    /**
     * @var decimal
     */
    protected $SalesPrice = null;

    /**
     * @var bool
     */
    protected $IsSalesPriceInclusiveVat = null;

    /**
     * @var guid
     */
    protected $SalesVatId = null;

    /**
     * @var decimal
     */
    protected $PurchasePrice = null;

    /**
     * @var bool
     */
    protected $IsInactive = null;

    /**
     * @var bool
     */
    protected $AllowChangePrice = null;

    /**
     * @var bool
     */
    protected $AllowChangeDescription = null;

    /**
     * @var bool
     */
    protected $AllowChangeVat = null;

    /**
     * @var bool
     */
    protected $AutoEnableEdit = null;

    /**
     * @param guid $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param guid $ProductGroupId
     * @return $this
     */
    public function setProductGroupId($ProductGroupId)
    {
        $this->ProductGroupId = $ProductGroupId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getProductGroupId()
    {
        return $this->ProductGroupId;
    }

    /**
     * @param string $Code
     * @return $this
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

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
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param ProductType $ProductType
     * @return $this
     */
    public function setProductType($ProductType)
    {
        $this->ProductType = $ProductType;
        return $this;
    }

    /**
     * @return ProductType
     */
    public function getProductType()
    {
        return $this->ProductType;
    }

    /**
     * @param UnitType $UnitType
     * @return $this
     */
    public function setUnitType($UnitType)
    {
        $this->UnitType = $UnitType;
        return $this;
    }

    /**
     * @return UnitType
     */
    public function getUnitType()
    {
        return $this->UnitType;
    }

    /**
     * @param bool $IsDivisible
     * @return $this
     */
    public function setIsDivisible($IsDivisible)
    {
        $this->IsDivisible = $IsDivisible;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDivisible()
    {
        return $this->IsDivisible;
    }

    /**
     * @param decimal $SalesPrice
     * @return $this
     */
    public function setSalesPrice($SalesPrice)
    {
        $this->SalesPrice = $SalesPrice;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getSalesPrice()
    {
        return $this->SalesPrice;
    }

    /**
     * @param bool $IsSalesPriceInclusiveVat
     * @return $this
     */
    public function setIsSalesPriceInclusiveVat($IsSalesPriceInclusiveVat)
    {
        $this->IsSalesPriceInclusiveVat = $IsSalesPriceInclusiveVat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSalesPriceInclusiveVat()
    {
        return $this->IsSalesPriceInclusiveVat;
    }

    /**
     * @param guid $SalesVatId
     * @return $this
     */
    public function setSalesVatId($SalesVatId)
    {
        $this->SalesVatId = $SalesVatId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getSalesVatId()
    {
        return $this->SalesVatId;
    }

    /**
     * @param decimal $PurchasePrice
     * @return $this
     */
    public function setPurchasePrice($PurchasePrice)
    {
        $this->PurchasePrice = $PurchasePrice;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getPurchasePrice()
    {
        return $this->PurchasePrice;
    }

    /**
     * @param bool $IsInactive
     * @return $this
     */
    public function setIsInactive($IsInactive)
    {
        $this->IsInactive = $IsInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->IsInactive;
    }

    /**
     * @param bool $AllowChangePrice
     * @return $this
     */
    public function setAllowChangePrice($AllowChangePrice)
    {
        $this->AllowChangePrice = $AllowChangePrice;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowChangePrice()
    {
        return $this->AllowChangePrice;
    }

    /**
     * @param bool $AllowChangeDescription
     * @return $this
     */
    public function setAllowChangeDescription($AllowChangeDescription)
    {
        $this->AllowChangeDescription = $AllowChangeDescription;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowChangeDescription()
    {
        return $this->AllowChangeDescription;
    }

    /**
     * @param bool $AllowChangeVat
     * @return $this
     */
    public function setAllowChangeVat($AllowChangeVat)
    {
        $this->AllowChangeVat = $AllowChangeVat;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowChangeVat()
    {
        return $this->AllowChangeVat;
    }

    /**
     * @param bool $AutoEnableEdit
     * @return $this
     */
    public function setAutoEnableEdit($AutoEnableEdit)
    {
        $this->AutoEnableEdit = $AutoEnableEdit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoEnableEdit()
    {
        return $this->AutoEnableEdit;
    }


}

