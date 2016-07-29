<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvRelationData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $EntityTypeId = null;

    /**
     * @var string
     */
    protected $Info = null;

    /**
     * @var string
     */
    protected $SortingName = null;

    /**
     * @var string
     */
    protected $DisplayName = null;

    /**
     * @var bool
     */
    protected $IsRoot = null;

    /**
     * @var bool
     */
    protected $IsDummy = null;

    /**
     * @var string
     */
    protected $ImportKey = null;

    /**
     * @var bool
     */
    protected $IsInactive = null;

    /**
     * @var PvFieldValuesData
     */
    protected $FieldValues = null;

    /**
     * @var ArrayOfPvCounterData
     */
    protected $CounterValues = null;

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
     * @param string $Info
     * @return $this
     */
    public function setInfo($Info)
    {
        $this->Info = $Info;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->Info;
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
     * @param bool $IsRoot
     * @return $this
     */
    public function setIsRoot($IsRoot)
    {
        $this->IsRoot = $IsRoot;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRoot()
    {
        return $this->IsRoot;
    }

    /**
     * @param bool $IsDummy
     * @return $this
     */
    public function setIsDummy($IsDummy)
    {
        $this->IsDummy = $IsDummy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDummy()
    {
        return $this->IsDummy;
    }

    /**
     * @param string $ImportKey
     * @return $this
     */
    public function setImportKey($ImportKey)
    {
        $this->ImportKey = $ImportKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getImportKey()
    {
        return $this->ImportKey;
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

    /**
     * @param ArrayOfPvCounterData $CounterValues
     * @return $this
     */
    public function setCounterValues($CounterValues)
    {
        $this->CounterValues = $CounterValues;
        return $this;
    }

    /**
     * @return ArrayOfPvCounterData
     */
    public function getCounterValues()
    {
        return $this->CounterValues;
    }


}

