<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvEntityTypeData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $EntityId = null;

    /**
     * @var BaseEntityType
     */
    protected $BaseEntityType = null;

    /**
     * @var BaseRelationType
     */
    protected $BaseRelationType = null;

    /**
     * @var string
     */
    protected $DescriptionSingular = null;

    /**
     * @var string
     */
    protected $DescriptionPlural = null;

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
     * @param BaseRelationType $BaseRelationType
     * @return $this
     */
    public function setBaseRelationType($BaseRelationType)
    {
        $this->BaseRelationType = $BaseRelationType;
        return $this;
    }

    /**
     * @return BaseRelationType
     */
    public function getBaseRelationType()
    {
        return $this->BaseRelationType;
    }

    /**
     * @param string $DescriptionSingular
     * @return $this
     */
    public function setDescriptionSingular($DescriptionSingular)
    {
        $this->DescriptionSingular = $DescriptionSingular;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionSingular()
    {
        return $this->DescriptionSingular;
    }

    /**
     * @param string $DescriptionPlural
     * @return $this
     */
    public function setDescriptionPlural($DescriptionPlural)
    {
        $this->DescriptionPlural = $DescriptionPlural;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionPlural()
    {
        return $this->DescriptionPlural;
    }


}

