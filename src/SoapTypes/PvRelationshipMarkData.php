<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvRelationshipMarkData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $RelationshipId = null;

    /**
     * @var string
     */
    protected $RelationshipDescription = null;

    /**
     * @var guid
     */
    protected $MarkId = null;

    /**
     * @var AddressType
     */
    protected $PreferredAddress = null;

    /**
     * @var \DateTime
     */
    protected $Date = null;

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

    /**
     * @param string $RelationshipDescription
     * @return $this
     */
    public function setRelationshipDescription($RelationshipDescription)
    {
        $this->RelationshipDescription = $RelationshipDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipDescription()
    {
        return $this->RelationshipDescription;
    }

    /**
     * @param guid $MarkId
     * @return $this
     */
    public function setMarkId($MarkId)
    {
        $this->MarkId = $MarkId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getMarkId()
    {
        return $this->MarkId;
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
     * @param \DateTime $Date
     * @return $this
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->Date;
    }


}

