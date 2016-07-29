<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvMenuItemData
{

    /**
     * @var CreateMenuItemType
     */
    protected $CreateMenuItemType = null;

    /**
     * @var guid
     */
    protected $EntityTypeId = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var guid
     */
    protected $WorkflowId = null;

    /**
     * @var guid
     */
    protected $WorkflowStepId = null;

    /**
     * @param CreateMenuItemType $CreateMenuItemType
     * @return $this
     */
    public function setCreateMenuItemType($CreateMenuItemType)
    {
        $this->CreateMenuItemType = $CreateMenuItemType;
        return $this;
    }

    /**
     * @return CreateMenuItemType
     */
    public function getCreateMenuItemType()
    {
        return $this->CreateMenuItemType;
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
     * @param guid $WorkflowId
     * @return $this
     */
    public function setWorkflowId($WorkflowId)
    {
        $this->WorkflowId = $WorkflowId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getWorkflowId()
    {
        return $this->WorkflowId;
    }

    /**
     * @param guid $WorkflowStepId
     * @return $this
     */
    public function setWorkflowStepId($WorkflowStepId)
    {
        $this->WorkflowStepId = $WorkflowStepId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getWorkflowStepId()
    {
        return $this->WorkflowStepId;
    }


}

