<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvActivityData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Info = null;

    /**
     * @var string
     */
    protected $Number = null;

    /**
     * @var \DateTime
     */
    protected $ViewSortingDate = null;

    /**
     * @var PvActivityFollowUpData
     */
    protected $FollowUp = null;

    /**
     * @var PvActivitySettingsData
     */
    protected $Settings = null;

    /**
     * @var PvRelationshipData
     */
    protected $ParentRelationship = null;

    /**
     * @var PvRelationshipData
     */
    protected $ChildRelationship = null;

    /**
     * @var PvFieldValuesData
     */
    protected $FieldValues = null;

    /**
     * @var PvAuditData
     */
    protected $AuditData = null;

    /**
     * @var PvActivityAuditData
     */
    protected $ActivityAuditData = null;

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
     * @param string $Number
     * @return $this
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param \DateTime $ViewSortingDate
     * @return $this
     */
    public function setViewSortingDate($ViewSortingDate)
    {
        $this->ViewSortingDate = $ViewSortingDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getViewSortingDate()
    {
        return $this->ViewSortingDate;
    }

    /**
     * @param PvActivityFollowUpData $FollowUp
     * @return $this
     */
    public function setFollowUp($FollowUp)
    {
        $this->FollowUp = $FollowUp;
        return $this;
    }

    /**
     * @return PvActivityFollowUpData
     */
    public function getFollowUp()
    {
        return $this->FollowUp;
    }

    /**
     * @param PvActivitySettingsData $Settings
     * @return $this
     */
    public function setSettings($Settings)
    {
        $this->Settings = $Settings;
        return $this;
    }

    /**
     * @return PvActivitySettingsData
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * @param PvRelationshipData $ParentRelationship
     * @return $this
     */
    public function setParentRelationship($ParentRelationship)
    {
        $this->ParentRelationship = $ParentRelationship;
        return $this;
    }

    /**
     * @return PvRelationshipData
     */
    public function getParentRelationship()
    {
        return $this->ParentRelationship;
    }

    /**
     * @param PvRelationshipData $ChildRelationship
     * @return $this
     */
    public function setChildRelationship($ChildRelationship)
    {
        $this->ChildRelationship = $ChildRelationship;
        return $this;
    }

    /**
     * @return PvRelationshipData
     */
    public function getChildRelationship()
    {
        return $this->ChildRelationship;
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
     * @param PvActivityAuditData $ActivityAuditData
     * @return $this
     */
    public function setActivityAuditData($ActivityAuditData)
    {
        $this->ActivityAuditData = $ActivityAuditData;
        return $this;
    }

    /**
     * @return PvActivityAuditData
     */
    public function getActivityAuditData()
    {
        return $this->ActivityAuditData;
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

