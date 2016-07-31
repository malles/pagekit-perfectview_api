<?php

namespace Bixie\PerfectviewApi\Controller;

use Bixie\PerfectviewApi\PerfectviewApi;
use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\ActivityCreate;
use Bixie\PerfectviewApi\SoapTypes\ActivityCreateResult;
use Bixie\PerfectviewApi\SoapTypes\ActivitySearchByField;
use Bixie\PerfectviewApi\SoapTypes\ApiGetCalls;
use Bixie\PerfectviewApi\SoapTypes\ApiGetVersion;
use Bixie\PerfectviewApi\SoapTypes\ArrayOfPvFieldValueData;
use Bixie\PerfectviewApi\SoapTypes\EntityTypeGet;
use Bixie\PerfectviewApi\SoapTypes\EntityTypeGetAll;
use Bixie\PerfectviewApi\SoapTypes\EntityTypeGetFields;
use Bixie\PerfectviewApi\SoapTypes\PvActivityFollowUpData;
use Bixie\PerfectviewApi\SoapTypes\PvActivitySettingsData;
use Bixie\PerfectviewApi\SoapTypes\PvFieldData;
use Bixie\PerfectviewApi\SoapTypes\PvFieldValueData;
use Bixie\PerfectviewApi\SoapTypes\PvRelationshipData;
use Bixie\PerfectviewApi\SoapTypes\PvWorkflowData;
use Bixie\PerfectviewApi\SoapTypes\RelationCreate;
use Bixie\PerfectviewApi\SoapTypes\RelationGet;
use Bixie\PerfectviewApi\SoapTypes\RelationGetAll;
use Bixie\PerfectviewApi\SoapTypes\RelationSearchByName;
use Bixie\PerfectviewApi\SoapTypes\RelationshipSearchByEmail;
use Bixie\PerfectviewApi\SoapTypes\WorkflowGetAll;
use Bixie\PerfectviewApi\SoapTypes\WorkflowGetQueues;
use Pagekit\Application as App;

/**
 * @Access(admin=true)
 */
class PerfectviewApiController {

	/**
	 * @Route("/", methods="GET")
	 */
	public function indexAction () {
		$d = false;
		$api_error = false;
		$results = [];
		try {

			$results['calls_today'] = App::pv_api()->call(new ApiGetCalls())->getUsedCallsToday();
			$results['api_version'] = App::pv_api()->call(new ApiGetVersion())->getVersion();
//			$workflows = App::pv_api()->call((new WorkflowGetAll()))->getWorkflows()->getPvWorkflowData();
//			/** @var PvWorkflowData $pvWorkflowData */
//			foreach ($workflows as $pvWorkflowData) {
//				$results['search_results'][] = App::pv_api()->call((new WorkflowGetQueues())
//					->setWorkflowId($pvWorkflowData->getId())
//				)->getQueues()->getPvQueueData();
//			}
//			$results['search_results'][] = App::pv_api()->call((new WorkflowGetQueues()))->getQueues()->getPvQueueData();

//			$results['search_results']['et'] = App::pv_api()->getEntityTypes();
//			$results['search_results']['r'] = $relationShip;
////			App::pv_api()->getEntityValues($relationShip);
//			$results['search_results']['pr'] = App::pv_api()->call(
//				(new RelationGet())->setRelationId($relationShip->getParentRelationId())
//			)->getRelation();


//			$acEntityData = App::pv_api()->getEntityData('5f56522b-33f6-4d09-a6da-880f9134df83');
//			$acFieldValues = App::pv_api()->getFieldValueDatas($acEntityData['fieldDatas'], [
//				'Number' => '2016/M/0002'
//			]);
//			$results['search_results']['ac1'] = App::pv_api()->call(
//				(new ActivitySearchByField())->setIncludeCounters(true)
//					->setActivityEntityTypeId('5f56522b-33f6-4d09-a6da-880f9134df83')
//					->setFieldValues($acFieldValues)
//					->setIncludeFields(true)
//					->setPageNumber(1)
//					->setPageSize(50)
//			)->getActivities()->getPvActivityData();




			$data = [
				'Notes' => 'Mail gekregen van website',
				'COR_date' => (new \DateTime())->format('Y-m-d H:i:s'),
				'COR_yourreference' => 'Mail gekregen van website',
				'COR_subject' => 'Mail gekregen van website',
				'Number' => '2016/FL/005'
			];
			$relationships = App::pv_api()->call((new RelationshipSearchByEmail())
				->setEmailAddress('test@email.nl')
				->setIncludeFields(1)
			)->getRelationships()->getPvRelationshipData();
			/** @var PvRelationshipData $relationShip */
			$relationship = $relationships[0];
//			$activity = App::pv_api()->createActivity($relationship, $data);
//			$results['search_results']['ac'] = $activity;


//			$values = App::pv_api()->getEntityValues($relationShip);
//			$results['search_results']['pedd'] = $values->getValue('CON_email');
//			$results['search_results']['re'] = $relationShip;
//			$results['search_results']['red'] = App::pv_api()->getEntityValues($relationShip)->all();

//			if ($results['search_results']['pfo'] = App::pv_api()->relationByFields(['ORG_relationcode' => '664760'])) {
//				$values = App::pv_api()->getEntityValues($results['search_results']['pfo']);
//				$results['search_results']['pfod'] = $values->getValue('COM_email');
//			}
//			if ($results['search_results']['pfp'] = App::pv_api()->relationByFields(['PER_relationcode' => '3304395'])) {
//				$values = App::pv_api()->getEntityValues($results['search_results']['pfp']);
//				$results['search_results']['pfpd'] = $values->getValue('PER_relationcode');
//			}
			if ($results['search_results']['pe'] = App::pv_api()->relationByFields(['CON_email' => 'ferd@thefreighthero.com'])) {
				$values = App::pv_api()->getEntityValues($results['search_results']['pe']);
				$results['search_results']['ped'] = $values->getValue('COM_email');
			}




		} catch (PerfectviewApiException $e) {
			$api_error = $e->getMessage();
			$d = App::pv_api()->debugLastSoapRequest();
		}

		return [
			'$view' => [
				'title' => __('Perfectview API'),
				'name' => 'bixie/perfectview_api/admin/index.php'
			],
			'$data' => [
				'config' => App::module('bixie/perfectview_api')->config()
			],
			'last_request_headers' => $d ? $d['request']['headers'] : false,
			'last_request_body' => $d ? $d['request']['body'] : false,
			'results' => $results,
			'api_error' => $api_error
		];
	}


	/**
	 * @Access("system: access settings")
	 */
	public function settingsAction () {

		return [
			'$view' => [
				'title' => __('Perfectview Settings'),
				'name' => 'bixie/perfectview_api/admin/settings.php'
			],
			'$data' => [
				'users' => array_values(App::pv_api()->getUsers()),
				'workflows' => array_values(App::pv_api()->getWorkflows()),
				'entityTypes' => array_values(App::pv_api()->getEntityTypes()),
				'config' => App::module('bixie/perfectview_api')->config()
			]
		];
	}

	/**
	 * @Request({"config": "array"}, csrf=true)
	 * @Access("system: access settings")
	 */
	public function configAction($config = []) {
		App::config('bixie/perfectview_api')->merge($config, true)
			->set('search_types', $config['search_types']);

		return ['message' => 'success'];
	}

}
