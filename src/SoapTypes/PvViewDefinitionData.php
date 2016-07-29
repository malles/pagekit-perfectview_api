<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvViewDefinitionData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var ViewEntryPoint
     */
    protected $ViewEntryPoint = null;

    /**
     * @var BaseEntityType
     */
    protected $BaseEntityType = null;

    /**
     * @var guid
     */
    protected $EntityId = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Sql = null;

    /**
     * @var string
     */
    protected $SortingColumn = null;

    /**
     * @var bool
     */
    protected $IsDefault = null;

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
     * @param ViewEntryPoint $ViewEntryPoint
     * @return $this
     */
    public function setViewEntryPoint($ViewEntryPoint)
    {
        $this->ViewEntryPoint = $ViewEntryPoint;
        return $this;
    }

    /**
     * @return ViewEntryPoint
     */
    public function getViewEntryPoint()
    {
        return $this->ViewEntryPoint;
    }

    /**
     * @param BaseEntityType $BaseEntityType
     * @return $this
     */
    public function setBaseEntityType($BaseEntityType)
    {
        $this->BaseEntityType = $BaseEntityType;
        return $this;
    }

    /**
     * @return BaseEntityType
     */
    public function getBaseEntityType()
    {
        return $this->BaseEntityType;
    }

    /**
     * @param guid $EntityId
     * @return $this
     */
    public function setEntityId($EntityId)
    {
        $this->EntityId = $EntityId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getEntityId()
    {
        return $this->EntityId;
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
     * @param string $Sql
     * @return $this
     */
    public function setSql($Sql)
    {
        $this->Sql = $Sql;
        return $this;
    }

    /**
     * @return string
     */
    public function getSql()
    {
        return $this->Sql;
    }

    /**
     * @param string $SortingColumn
     * @return $this
     */
    public function setSortingColumn($SortingColumn)
    {
        $this->SortingColumn = $SortingColumn;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortingColumn()
    {
        return $this->SortingColumn;
    }

    /**
     * @param bool $IsDefault
     * @return $this
     */
    public function setIsDefault($IsDefault)
    {
        $this->IsDefault = $IsDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }


}

