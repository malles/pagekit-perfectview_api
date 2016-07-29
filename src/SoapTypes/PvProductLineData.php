<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvProductLineData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var decimal
     */
    protected $Quantity = null;

    /**
     * @var decimal
     */
    protected $Amount = null;

    /**
     * @var decimal
     */
    protected $TotalAmount = null;

    /**
     * @var decimal
     */
    protected $PurchaseAmount = null;

    /**
     * @var guid
     */
    protected $VatId = null;

    /**
     * @var guid
     */
    protected $ProductId = null;

    /**
     * @var string
     */
    protected $Description = null;

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
     * @param decimal $Quantity
     * @return $this
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param decimal $Amount
     * @return $this
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param decimal $TotalAmount
     * @return $this
     */
    public function setTotalAmount($TotalAmount)
    {
        $this->TotalAmount = $TotalAmount;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param decimal $PurchaseAmount
     * @return $this
     */
    public function setPurchaseAmount($PurchaseAmount)
    {
        $this->PurchaseAmount = $PurchaseAmount;
        return $this;
    }

    /**
     * @return decimal
     */
    public function getPurchaseAmount()
    {
        return $this->PurchaseAmount;
    }

    /**
     * @param guid $VatId
     * @return $this
     */
    public function setVatId($VatId)
    {
        $this->VatId = $VatId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getVatId()
    {
        return $this->VatId;
    }

    /**
     * @param guid $ProductId
     * @return $this
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getProductId()
    {
        return $this->ProductId;
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


}

