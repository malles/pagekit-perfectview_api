<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvUserData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $RelationshipId = null;

    /**
     * @var guid
     */
    protected $RelationId = null;

    /**
     * @var string
     */
    protected $DisplayName = null;

    /**
     * @var string
     */
    protected $SortingName = null;

    /**
     * @var string
     */
    protected $Initials = null;

    /**
     * @var string
     */
    protected $Base64EncodedImage = null;

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
     * @param guid $RelationId
     * @return $this
     */
    public function setRelationId($RelationId)
    {
        $this->RelationId = $RelationId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getRelationId()
    {
        return $this->RelationId;
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
     * @param string $Initials
     * @return $this
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param string $Base64EncodedImage
     * @return $this
     */
    public function setBase64EncodedImage($Base64EncodedImage)
    {
        $this->Base64EncodedImage = $Base64EncodedImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64EncodedImage()
    {
        return $this->Base64EncodedImage;
    }


}

