<?php

namespace Bixie\PerfectviewApi\ApiTrait;

use Bixie\PerfectviewApi\PerfectviewApi;
use Bixie\PerfectviewApi\SoapTypes\PvRelationData;
use Bixie\PerfectviewApi\SoapTypes\RelationGet;
use Bixie\PerfectviewApi\SoapTypes\RelationGetParentRelationships;
use Pagekit\User\Model\User;

trait UserApiTrait {

    /**
     * @param User $user
     * @return PvRelationData
     */
    public function getRelationFromUser (User $user) {
        /** @var PvRelationData $relation */
        if (!$user->get('perfectview_link_person')) {
            return (new PvRelationData())->setIsDummy(true)->setDisplayName(__('Niet gekoppeld'));
        }
        if ($relationcode = $user->get('perfectview_relation_code')) {
            if ($relation = $this->relationByFields(['PER_relationcode' => $relationcode], $this->config['person_types'])) {

                return $relation;
            }
        }
        //try to find by email
        if ($relation = $this->relationByEmail($user->email)) {

            return $relation;
        }
        //create new object
        return (new PvRelationData())->setIsDummy(true)->setDisplayName($user->name);
    }

    /**
     * @param User $user
     * @return PvRelationData
     */
    public function getParentRelationFromUser (User $user) {
        /** @var PvRelationData $relation */
        if (!$user->get('perfectview_link_organisation')) {
            return (new PvRelationData())->setIsDummy(true)->setDisplayName(__('Niet gekoppeld'));
        }
        if ($relationcode = $user->get('perfectview_parent_relation_code')) {
            if ($relation = $this->relationByFields(['ORG_relationcode' => $relationcode], $this->config['organistation_types'])) {

                return $relation;
            }
        }
        //try to find through relationships
        if ($person_relation = $this->getRelationFromUser($user) and $person_relation->getId()) {
            if ($relationships = $this->call((new RelationGetParentRelationships())
                ->setRelationId($person_relation->getId())
                ->setIncludeFields(true))->getRelationships()->getPvRelationshipData()
            ) {
                foreach ($relationships as $relationship) {
                    //bail out when private person
                    if ($relationship->getParentRelationId() == PerfectviewApi::ROOT_GUID) {
                        return (new PvRelationData())->setIsDummy(true)->setId(PerfectviewApi::ROOT_GUID)->setDisplayName(__('Particuliere klant'));
                    }
                    //check the correct type
                    $entityData = $this->getEntityData($relationship->getEntityTypeId());
                    if (in_array($entityData['entityType']->getId(), $this->config['person_types'])) {
                        if ($relation = $this->call(
                            (new RelationGet())->setRelationId($relationship->getParentRelationId())->setIncludeFields(true)
                        )->getRelation()
                        ) {
                            return $relation;
                        }
                    }
                }
            }
        }
        return (new PvRelationData())->setIsDummy(true)->setDisplayName(__('Niet gekoppeld'));
    }
}