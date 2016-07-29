<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvObjectRightData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var guid
     */
    protected $ObjectId = null;

    /**
     * @var string
     */
    protected $ObjectType = null;

    /**
     * @var bool
     */
    protected $Create = null;

    /**
     * @var bool
     */
    protected $Edit = null;

    /**
     * @var bool
     */
    protected $Delete = null;

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
     * @param guid $ObjectId
     * @return $this
     */
    public function setObjectId($ObjectId)
    {
        $this->ObjectId = $ObjectId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }

    /**
     * @param string $ObjectType
     * @return $this
     */
    public function setObjectType($ObjectType)
    {
        $this->ObjectType = $ObjectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectType()
    {
        return $this->ObjectType;
    }

    /**
     * @param bool $Create
     * @return $this
     */
    public function setCreate($Create)
    {
        $this->Create = $Create;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCreate()
    {
        return $this->Create;
    }

    /**
     * @param bool $Edit
     * @return $this
     */
    public function setEdit($Edit)
    {
        $this->Edit = $Edit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEdit()
    {
        return $this->Edit;
    }

    /**
     * @param bool $Delete
     * @return $this
     */
    public function setDelete($Delete)
    {
        $this->Delete = $Delete;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDelete()
    {
        return $this->Delete;
    }


}

