<?php

namespace Bixie\PerfectviewApi\ApiTrait;

use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\ActivityCreate;
use Bixie\PerfectviewApi\SoapTypes\ActivityCreateResult;
use Bixie\PerfectviewApi\SoapTypes\PvActivityData;
use Bixie\PerfectviewApi\SoapTypes\PvActivityFollowUpData;
use Bixie\PerfectviewApi\SoapTypes\PvActivitySettingsData;
use Bixie\PerfectviewApi\SoapTypes\PvRelationshipData;

trait ActivityApiTrait {

    /**
     * @param PvRelationshipData $relationShip
     * @param array              $data
     * @return PvActivityData
     */
    public function createActivity (PvRelationshipData $relationShip, $data = []) {
        $WorkflowId = $this->config['communication_workflow'];
        $WorkflowStepId = $this->config['communication_workflow_step'];
        $OwnerUserId = $this->config['communication_user'];

        $settings = (new PvActivitySettingsData())
            ->setWorkflowId($WorkflowId)
            ->setWorkflowStepId($WorkflowStepId)
            ->setParentRelationshipId($relationShip->getId())
            ->setChildRelationshipId(null);
        $followUp = (new PvActivityFollowUpData())
            ->setStart(new \DateTime())
            ->setEnd(new \DateTime())
            ->setInAgenda(false)
            ->setReminderPeriodInMinutes(0)
            ->setOwnerUserId($OwnerUserId)
            ->setPlacedInQueueId(null);

        $workflowEntityData = $this->getWorkflowEntityData($WorkflowId);
        $workflowFieldValues = $this->getFieldValueDatas($workflowEntityData['fieldDatas'], $data);

        /** @var ActivityCreateResult $result */
        $result = $this->call(
            (new ActivityCreate())
                ->setConnectToActivityId(null)
                ->setSettings($settings)
                ->setFollowUp($followUp)
                ->setFieldValues($workflowFieldValues)
        );
        if ($result->isSuccess()) {
            return $result->getActivity();
        } else {
            throw new PerfectviewApiException($result->getError());
        }
    }
}