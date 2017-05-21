<?php

namespace Bixie\PerfectviewApi\ApiTrait;

use Bixie\PerfectviewApi\PerfectviewApi;
use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\PvRelationData;
use Bixie\PerfectviewApi\SoapTypes\PvRelationshipData;
use Bixie\PerfectviewApi\SoapTypes\RelationCreate;
use Bixie\PerfectviewApi\SoapTypes\RelationCreateResult;
use Bixie\PerfectviewApi\SoapTypes\RelationshipSearchByEmail;
use Bixie\PerfectviewApi\SoapTypes\RelationshipSearchByField;
use Bixie\PerfectviewApi\SoapTypes\RelationshipSearchByFieldResult;

trait RelationshipApiTrait {

    /**
     * @param string|\Bixie\PerfectviewApi\SoapTypes\guid $relationEntityId
     * @param string|\Bixie\PerfectviewApi\SoapTypes\guid $relationshipEntityId
     * @param array                                       $data
     * @return RelationCreateResult
     */
    public function createRelationship ($relationEntityId, $relationshipEntityId, $data) {
        //todo
        return;
        $relationEntityData = $this->getEntityData($relationEntityId);
        $relationFieldValues = $this->getFieldValueDatas($relationEntityData['fieldDatas'], $data);
        $relationshipEntityData = $this->getEntityData($relationshipEntityId);
        $relationshipFieldValues = $this->getFieldValueDatas($relationshipEntityData['fieldDatas'], $data);
        /** @var RelationCreateResult $result */
        $result = $this->call((new RelationCreate())
            ->setParentRelationId(PerfectviewApi::ROOT_GUID)
            ->setRelationEntityTypeId($relationEntityId)
            ->setRelationshipEntityTypeId($relationshipEntityId)
            ->setRelationFieldValues($relationFieldValues)
            ->setRelationshipFieldValues($relationshipFieldValues)
        );

        if ($result->isSuccess()) {
            return $result;
        } else {
            throw new PerfectviewApiException($result->getErrorInformation());
        }

    }

    /**
     * Sometimes better found with ->relationByFields(['COM_email' => 'email'])
     * @param string $email
     * @param array $search_types
     * @return PvRelationshipData|bool
     */
    public function relationshipByEmail ($email, $search_types = []) {
        $search_types = $search_types ? (array)$search_types : $this->config['search_types'];
        $relationships = $this->call((new RelationshipSearchByEmail())
            ->setEmailAddress($email)
            ->setIncludeFields(1)
        )->getRelationships()->getPvRelationshipData();
        if ($relationships) {
            /** @var PvRelationshipData $relationship */
            foreach ($relationships as $relationship) {
                if ($relationship->getIsEmployee()) {
                    continue;
                }
                //check the correct type
                $entityData = $this->getEntityData($relationship->getEntityTypeId());
                if (in_array($entityData['entityType']->getId(), $search_types)) {
                    return $relationship;
                }
            }

        }
        return false;
    }


    /**
     * @param array $search
     * @param array|string $search_types
     * @return PvRelationData|bool
     */
    public function relationshipByFields ($search, $search_types = []) {
        $search_types = $search_types ? (array)$search_types : $this->config['search_types'];
        $relationship = false;
        while ($relationship === false and $search_type = array_shift($search_types)) {
            $entityData = $this->getEntityData($search_type);
            $fieldValues = $this->getFieldValueDatas($entityData['fieldDatas'], $search);
            //only serach if search fields are in type
            if (count($fieldValues->getPvFieldValueData())) {
                /** @var RelationshipSearchByFieldResult $result */
                $relationships = $this->call((new RelationshipSearchByField())
                    ->setRelationshipEntityTypeId($search_type)
                    ->setFieldValues($fieldValues)
                    ->setIncludeFields(true)
                    ->setPageNumber(1)
                    ->setPageSize(25)
                )->getRelationships()->getPvRelationshipData();

                //search is not strict, filter results
                if ($relationships) {
                    foreach ($relationships as $_relationship) {
                        $values = $this->getEntityValues($_relationship);
                        foreach ($search as $key => $value) {
                            if ($values->getValue($key) == $value) {
                                $relationship = $_relationship;
                                break 2;
                            }
                        }
                    }
                }
            }
        }
        return $relationship;
    }


}