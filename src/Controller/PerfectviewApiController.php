<?php

namespace Bixie\PerfectviewApi\Controller;

use Bixie\PerfectviewApi\PerfectviewApiException;
use Bixie\PerfectviewApi\SoapTypes\ApiGetCalls;
use Bixie\PerfectviewApi\SoapTypes\ApiGetVersion;
use Bixie\PerfectviewApi\SoapTypes\RelationSearchByName;
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
			$results['search_results'] = App::pv_api()->call((new RelationSearchByName())->setNameSearchText('123'))->getRelations();
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
				'title' => __('Email sendersettings'),
				'name' => 'bixie/perfectview_api/admin/settings.php'
			],
			'$data' => [
				'config' => App::module('bixie/perfectview_api')->config()
			]
		];
	}

	/**
	 * @Request({"config": "array"}, csrf=true)
	 * @Access("system: access settings")
	 */
	public function configAction($config = []) {
		App::config('bixie/perfectview_api')->merge($config, true);

		return ['message' => 'success'];
	}

}
