<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvActivitySettingsData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $WorkflowId = null;

    /**
     * @var guid
     */
    protected $WorkflowStepId = null;

    /**
     * @var guid
     */
    protected $ParentRelationshipId = null;

    /**
     * @var guid
     */
    protected $ChildRelationshipId = null;

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

    /**
     * @param guid $ParentRelationshipId
     * @return $this
     */
    public function setParentRelationshipId($ParentRelationshipId)
    {
        $this->ParentRelationshipId = $ParentRelationshipId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getParentRelationshipId()
    {
        return $this->ParentRelationshipId;
    }

    /**
     * @param guid $ChildRelationshipId
     * @return $this
     */
    public function setChildRelationshipId($ChildRelationshipId)
    {
        $this->ChildRelationshipId = $ChildRelationshipId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getChildRelationshipId()
    {
        return $this->ChildRelationshipId;
    }


}

