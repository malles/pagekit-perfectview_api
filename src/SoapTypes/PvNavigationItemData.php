<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvNavigationItemData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $SortIndex = null;

    /**
     * @var NavigationItemCategory
     */
    protected $Category = null;

    /**
     * @var ViewEntryPoint
     */
    protected $ViewEntryPoint = null;

    /**
     * @var BaseEntityType
     */
    protected $BaseEntityType = null;

    /**
     * @var RelationType
     */
    protected $RelationType = null;

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
     * @param string $SortIndex
     * @return $this
     */
    public function setSortIndex($SortIndex)
    {
        $this->SortIndex = $SortIndex;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortIndex()
    {
        return $this->SortIndex;
    }

    /**
     * @param NavigationItemCategory $Category
     * @return $this
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return NavigationItemCategory
     */
    public function getCategory()
    {
        return $this->Category;
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
     * @param RelationType $RelationType
     * @return $this
     */
    public function setRelationType($RelationType)
    {
        $this->RelationType = $RelationType;
        return $this;
    }

    /**
     * @return RelationType
     */
    public function getRelationType()
    {
        return $this->RelationType;
    }


}

