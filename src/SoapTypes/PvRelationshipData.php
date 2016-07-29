<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;
use Bixie\PerfectviewApi\Client\PerfectviewEntityTypeInterface;
use Bixie\PerfectviewApi\Client\PerfectviewEntityTypeTrait;

class PvRelationshipData implements \JsonSerializable, PerfectviewEntityTypeInterface
{

    use JsonSerializableTrait, PerfectviewEntityTypeTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $EntityTypeId = null;

    /**
     * @var guid
     */
    protected $ParentRelationId = null;

    /**
     * @var guid
     */
    protected $ChildRelationId = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var string
     */
    protected $DisplayCity = null;

    /**
     * @var string
     */
    protected $DisplayName = null;

    /**
     * @var string
     */
    protected $SortingName = null;

    /**
     * @var bool
     */
    protected $IsContact = null;

    /**
     * @var bool
     */
    protected $IsEmployee = null;

    /**
     * @var bool
     */
    protected $IsOrganisation = null;

    /**
     * @var AddressType
     */
    protected $PreferredAddress = null;

    /**
     * @var AddressStyle
     */
    protected $AddresStyle = null;

    /**
     * @var string
     */
    protected $Addressing = null;

    /**
     * @var string
     */
    protected $Openening = null;

    /**
     * @var string
     */
    protected $AddressingVariant = null;

    /**
     * @var string
     */
    protected $OpeneningVariant = null;

    /**
     * @var guid
     */
    protected $TittleId = null;

    /**
     * @var guid
     */
    protected $AccountManagerId = null;

    /**
     * @var bool
     */
    protected $IsInactive = null;

    /**
     * @var bool
     */
    protected $OptOut = null;

    /**
     * @var PvAuditData
     */
    protected $AuditData = null;

    /**
     * @var PvFieldValuesData
     */
    protected $FieldValues = null;

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
     * @param guid $EntityTypeId
     * @return $this
     */
    public function setEntityTypeId($EntityTypeId)
    {
        $this->EntityTypeId = $EntityTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getEntityTypeId()
    {
        return $this->EntityTypeId;
    }

    /**
     * @param guid $ParentRelationId
     * @return $this
     */
    public function setParentRelationId($ParentRelationId)
    {
        $this->ParentRelationId = $ParentRelationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getParentRelationId()
    {
        return $this->ParentRelationId;
    }

    /**
     * @param guid $ChildRelationId
     * @return $this
     */
    public function setChildRelationId($ChildRelationId)
    {
        $this->ChildRelationId = $ChildRelationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getChildRelationId()
    {
        return $this->ChildRelationId;
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
     * @param string $DisplayCity
     * @return $this
     */
    public function setDisplayCity($DisplayCity)
    {
        $this->DisplayCity = $DisplayCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayCity()
    {
        return $this->DisplayCity;
    }

    /**
     * @param string $DisplayName
     * @return $this
     */
    public function setDisplayName($DisplayName)
    {
        $this->DisplayName = $DisplayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }

    /**
     * @param string $SortingName
     * @return $this
     */
    public function setSortingName($SortingName)
    {
        $this->SortingName = $SortingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortingName()
    {
        return $this->SortingName;
    }

    /**
     * @param bool $IsContact
     * @return $this
     */
    public function setIsContact($IsContact)
    {
        $this->IsContact = $IsContact;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsContact()
    {
        return $this->IsContact;
    }

    /**
     * @param bool $IsEmployee
     * @return $this
     */
    public function setIsEmployee($IsEmployee)
    {
        $this->IsEmployee = $IsEmployee;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEmployee()
    {
        return $this->IsEmployee;
    }

    /**
     * @param bool $IsOrganisation
     * @return $this
     */
    public function setIsOrganisation($IsOrganisation)
    {
        $this->IsOrganisation = $IsOrganisation;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOrganisation()
    {
        return $this->IsOrganisation;
    }

    /**
     * @param AddressType $PreferredAddress
     * @return $this
     */
    public function setPreferredAddress($PreferredAddress)
    {
        $this->PreferredAddress = $PreferredAddress;
        return $this;
    }

    /**
     * @return AddressType
     */
    public function getPreferredAddress()
    {
        return $this->PreferredAddress;
    }

    /**
     * @param AddressStyle $AddresStyle
     * @return $this
     */
    public function setAddresStyle($AddresStyle)
    {
        $this->AddresStyle = $AddresStyle;
        return $this;
    }

    /**
     * @return AddressStyle
     */
    public function getAddresStyle()
    {
        return $this->AddresStyle;
    }

    /**
     * @param string $Addressing
     * @return $this
     */
    public function setAddressing($Addressing)
    {
        $this->Addressing = $Addressing;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressing()
    {
        return $this->Addressing;
    }

    /**
     * @param string $Openening
     * @return $this
     */
    public function setOpenening($Openening)
    {
        $this->Openening = $Openening;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenening()
    {
        return $this->Openening;
    }

    /**
     * @param string $AddressingVariant
     * @return $this
     */
    public function setAddressingVariant($AddressingVariant)
    {
        $this->AddressingVariant = $AddressingVariant;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressingVariant()
    {
        return $this->AddressingVariant;
    }

    /**
     * @param string $OpeneningVariant
     * @return $this
     */
    public function setOpeneningVariant($OpeneningVariant)
    {
        $this->OpeneningVariant = $OpeneningVariant;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpeneningVariant()
    {
        return $this->OpeneningVariant;
    }

    /**
     * @param guid $TittleId
     * @return $this
     */
    public function setTittleId($TittleId)
    {
        $this->TittleId = $TittleId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getTittleId()
    {
        return $this->TittleId;
    }

    /**
     * @param guid $AccountManagerId
     * @return $this
     */
    public function setAccountManagerId($AccountManagerId)
    {
        $this->AccountManagerId = $AccountManagerId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getAccountManagerId()
    {
        return $this->AccountManagerId;
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
     * @param bool $OptOut
     * @return $this
     */
    public function setOptOut($OptOut)
    {
        $this->OptOut = $OptOut;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOptOut()
    {
        return $this->OptOut;
    }

    /**
     * @param PvAuditData $AuditData
     * @return $this
     */
    public function setAuditData($AuditData)
    {
        $this->AuditData = $AuditData;
        return $this;
    }

    /**
     * @return PvAuditData
     */
    public function getAuditData()
    {
        return $this->AuditData;
    }

    /**
     * @param PvFieldValuesData $FieldValues
     * @return $this
     */
    public function setFieldValues($FieldValues)
    {
        $this->FieldValues = $FieldValues;
        return $this;
    }

    /**
     * @return PvFieldValuesData
     */
    public function getFieldValues()
    {
        return $this->FieldValues;
    }


}

