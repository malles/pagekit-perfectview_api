<?php


namespace Bixie\PerfectviewApi\Event;

use Bixie\Freighthero\User\FreightheroUser;
use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\PvRelationshipData;
use Bixie\PerfectviewApi\SoapTypes\RelationCreate;
use Bixie\PerfectviewApi\SoapTypes\RelationCreateResult;
use Bixie\PerfectviewApi\SoapTypes\RelationGet;
use Bixie\PerfectviewApi\SoapTypes\RelationshipSearchByEmail;
use Pagekit\Application as App;
use Pagekit\Event\EventSubscriberInterface;
use Bixie\Emailsender\Event\EmailPrepareEvent;

class EmailPrepareListener implements EventSubscriberInterface {

    /**
     * Content plugins callback.
     * @param EmailPrepareEvent $event
     */
    public function onEmailPrepare (EmailPrepareEvent $event) {

        $text = $event->getText();
        $recipients = $event->getMessage()->getTo();
        $emails = array_keys($recipients);

        if (!in_array($text->getEmailtype()->getName(), ['tfh.shipment.admin.supplierinfo'])) return;

        //is user logged in ?
        /** @var FreightheroUser $fhUser */
        if ($fhUser = FreightheroUser::load() and $fhUser->isAuthenticated()) {
            if (!$crm_id = $fhUser->getCrmId()) {
                //todo this should have been done onUserCreate, redo?
            }
            //todo add event to CRM
            return;
        }

        try {//is this email known in PerfectView?
            $relationShips = App::pv_api()->call((new RelationshipSearchByEmail())
                ->setEmailAddress(reset($emails))
                ->setIncludeFields(1)
            )->getRelationships()->getPvRelationshipData();
            //only if one match is found
            if ($relationShips && count($relationShips) == 1) {
                /** @var PvRelationshipData $relationShip */
                $relationShip = $relationShips[0];
                //			App::pv_api()->getEntityValues($relationShip);

                //user not already known in system as other user?
                if ($existingUser = FreightheroUser::queryProfileValues([
                    'crm_id' => $relationShip->getChildRelationId()
                ], true)
                ) {

                    //todo add activity to CRM
                    return;
                }
                //create user in CRM
                $perfectview_api = App::module('bixie/perfectview_api');
                /** @var RelationCreateResult $result */
                if ($result = App::pv_api()->createRelation(
                    $perfectview_api->config('person_type'),
                    $perfectview_api->config('person_relationship_type'),
                    [
                        'Notes' => 'Toegevoegd via website',
                        'PER_firstname' => 'Website',
                        'PER_name' => 'Gebruiker',
                        'COM_email' => reset($emails)
                    ])
                ) {

                    $relation = $result->getRelation();
                    //todo add activity

                }
            }
        } catch (PerfectviewApiException $e) {
            //todo
        }
    }


    /**
     * {@inheritdoc}
     */
    public function subscribe () {
        return [
            'emailsender.prepare' => ['onEmailPrepare', -50]
        ];
    }

}