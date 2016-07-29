<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvNoteData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $ParentId = null;

    /**
     * @var guid
     */
    protected $CreatedByUserRelationId = null;

    /**
     * @var \DateTime
     */
    protected $CreatedAt = null;

    /**
     * @var string
     */
    protected $Text = null;

    /**
     * @var guid
     */
    protected $TypeId = null;

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
     * @param guid $ParentId
     * @return $this
     */
    public function setParentId($ParentId)
    {
        $this->ParentId = $ParentId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getParentId()
    {
        return $this->ParentId;
    }

    /**
     * @param guid $CreatedByUserRelationId
     * @return $this
     */
    public function setCreatedByUserRelationId($CreatedByUserRelationId)
    {
        $this->CreatedByUserRelationId = $CreatedByUserRelationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getCreatedByUserRelationId()
    {
        return $this->CreatedByUserRelationId;
    }

    /**
     * @param \DateTime $CreatedAt
     * @return $this
     */
    public function setCreatedAt($CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * @param string $Text
     * @return $this
     */
    public function setText($Text)
    {
        $this->Text = $Text;
        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param guid $TypeId
     * @return $this
     */
    public function setTypeId($TypeId)
    {
        $this->TypeId = $TypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getTypeId()
    {
        return $this->TypeId;
    }


}

