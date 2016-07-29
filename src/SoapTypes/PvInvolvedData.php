<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvInvolvedData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Type = null;

    /**
     * @var guid
     */
    protected $EntityTypeId = null;

    /**
     * @var guid
     */
    protected $ActivityId = null;

    /**
     * @var guid
     */
    protected $RelationshipId = null;

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
     * @param string $Type
     * @return $this
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
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
     * @param guid $ActivityId
     * @return $this
     */
    public function setActivityId($ActivityId)
    {
        $this->ActivityId = $ActivityId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param guid $RelationshipId
     * @return $this
     */
    public function setRelationshipId($RelationshipId)
    {
        $this->RelationshipId = $RelationshipId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationshipId()
    {
        return $this->RelationshipId;
    }


}

