<?php

namespace Bixie\PerfectviewApi\ApiTrait;

use Bixie\PerfectviewApi\PerfectviewApi;
use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\PvRelationData;
use Bixie\PerfectviewApi\SoapTypes\PvRelationshipData;
use Bixie\PerfectviewApi\SoapTypes\RelationCreate;
use Bixie\PerfectviewApi\SoapTypes\RelationCreateResult;
use Bixie\PerfectviewApi\SoapTypes\RelationGet;
use Bixie\PerfectviewApi\SoapTypes\RelationSearchByField;
use Bixie\PerfectviewApi\SoapTypes\RelationSearchByFieldResult;
use Bixie\PerfectviewApi\SoapTypes\RelationshipSearchByEmail;

trait RelationApiTrait {

	/**
	 * @param string|\Bixie\PerfectviewApi\SoapTypes\guid $relationEntityId
	 * @param string|\Bixie\PerfectviewApi\SoapTypes\guid $relationshipEntityId
	 * @param array                 $data
	 * @return RelationCreateResult
	 */
	public function createRelation ($relationEntityId, $relationshipEntityId, $data) {

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
	 * @return PvRelationData|bool
	 */
	public function relationByEmail ($email) {
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
				if (in_array($entityData['entityType']->getId(), $this->config['person_types'])) {
					if ($relation = $this->call(
						(new RelationGet())->setRelationId($relationship->getChildRelationId())->setIncludeFields(true)
					)->getRelation()) {
						return $relation;
					}
				}
			}

		}
		return false;
	}


	/**
	 * @param array $search
	 * @param array $search_types
	 * @return PvRelationData|bool
	 */
	public function relationByFields ($search, $search_types = []) {
		$search_types = $search_types ? (array)$search_types : $this->config['search_types'];
		$relation = false;
		while ($relation === false and $search_type = array_shift($search_types)) {
			$entityData = $this->getEntityData($search_type);
			$fieldValues = $this->getFieldValueDatas($entityData['fieldDatas'], $search);
			//only serach if search fields are in type
			if (count($fieldValues->getPvFieldValueData())) {
				/** @var RelationSearchByFieldResult $result */
				$relations = $this->call((new RelationSearchByField())
					->setRelationEntityTypeId($search_type)
					->setFieldValues($fieldValues)
					->setIncludeFields(true)
					->setPageNumber(1)
					->setPageSize(25)
				)->getRelations()->getPvRelationData();

				//search is not strict, filter results
				if ($relations) {
					foreach ($relations as $_relation) {
						$values = $this->getEntityValues($_relation);
						foreach ($search as $key => $value) {
							if ($values->getValue($key) == $value) {
								$relation = $_relation;
								break 2;
							}
						}
					}
				}
			}
		}

		return $relation;
	}


}