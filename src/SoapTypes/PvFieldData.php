<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvFieldData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Label = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var int
     */
    protected $SortIndex = null;

    /**
     * @var string
     */
    protected $CategoryName = null;

    /**
     * @var int
     */
    protected $CategorySortIndex = null;

    /**
     * @var bool
     */
    protected $HideAtEntryForm = null;

    /**
     * @var string
     */
    protected $UserFriendlyName = null;

    /**
     * @var bool
     */
    protected $IsReadOnly = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var DesignerControlType
     */
    protected $Control = null;

    /**
     * @var DatabaseFieldType
     */
    protected $Type = null;

    /**
     * @var int
     */
    protected $Length = null;

    /**
     * @var ComboboxValuesType
     */
    protected $ComboboxValues = null;

    /**
     * @var string
     */
    protected $ExtraInfo = null;

    /**
     * @var bool
     */
    protected $IsRequired = null;

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
     * @param string $Label
     * @return $this
     */
    public function setLabel($Label)
    {
        $this->Label = $Label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->Label;
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
     * @param int $SortIndex
     * @return $this
     */
    public function setSortIndex($SortIndex)
    {
        $this->SortIndex = $SortIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getSortIndex()
    {
        return $this->SortIndex;
    }

    /**
     * @param string $CategoryName
     * @return $this
     */
    public function setCategoryName($CategoryName)
    {
        $this->CategoryName = $CategoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }

    /**
     * @param int $CategorySortIndex
     * @return $this
     */
    public function setCategorySortIndex($CategorySortIndex)
    {
        $this->CategorySortIndex = $CategorySortIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategorySortIndex()
    {
        return $this->CategorySortIndex;
    }

    /**
     * @param bool $HideAtEntryForm
     * @return $this
     */
    public function setHideAtEntryForm($HideAtEntryForm)
    {
        $this->HideAtEntryForm = $HideAtEntryForm;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHideAtEntryForm()
    {
        return $this->HideAtEntryForm;
    }

    /**
     * @param string $UserFriendlyName
     * @return $this
     */
    public function setUserFriendlyName($UserFriendlyName)
    {
        $this->UserFriendlyName = $UserFriendlyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserFriendlyName()
    {
        return $this->UserFriendlyName;
    }

    /**
     * @param bool $IsReadOnly
     * @return $this
     */
    public function setIsReadOnly($IsReadOnly)
    {
        $this->IsReadOnly = $IsReadOnly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsReadOnly()
    {
        return $this->IsReadOnly;
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
     * @param DesignerControlType $Control
     * @return $this
     */
    public function setControl($Control)
    {
        $this->Control = $Control;
        return $this;
    }

    /**
     * @return DesignerControlType
     */
    public function getControl()
    {
        return $this->Control;
    }

    /**
     * @param DatabaseFieldType $Type
     * @return $this
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return DatabaseFieldType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param int $Length
     * @return $this
     */
    public function setLength($Length)
    {
        $this->Length = $Length;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * @param ComboboxValuesType $ComboboxValues
     * @return $this
     */
    public function setComboboxValues($ComboboxValues)
    {
        $this->ComboboxValues = $ComboboxValues;
        return $this;
    }

    /**
     * @return ComboboxValuesType
     */
    public function getComboboxValues()
    {
        return $this->ComboboxValues;
    }

    /**
     * @param string $ExtraInfo
     * @return $this
     */
    public function setExtraInfo($ExtraInfo)
    {
        $this->ExtraInfo = $ExtraInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }

    /**
     * @param bool $IsRequired
     * @return $this
     */
    public function setIsRequired($IsRequired)
    {
        $this->IsRequired = $IsRequired;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }


}

