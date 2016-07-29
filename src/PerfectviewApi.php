<?php


namespace Bixie\PerfectviewApi;

use Bixie\PerfectviewApi\Client\ClassMaps;
use Bixie\PerfectviewApi\Client\PerfectviewClient;
use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;
use Bixie\PerfectviewApi\Client\PerfectviewRequest;
use Bixie\PerfectviewApi\SoapTypes\ApiCredentials;
use Bixie\PerfectviewApi\SoapTypes\ApiSourceApplication;
use Monolog\Logger;
use Pagekit\Application as App;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Type\ResultInterface;

class PerfectviewApi {

	const API_URL = 'https://api.perfectview.nl/V1/perfectview.asmx?WSDL';
	const SOURCE_NAME = 'Bixie Perfectview API for Pagekit';
	const SOURCE_VERSION = '0.1';
	/**
	 * @var App
	 */
	protected $app;
	/**
	 * @var array
	 */
	protected $config;
	/**
	 * @var PerfectviewClient
	 */
	protected $api;
	/**
	 * @var ApiCredentials
	 */
	protected $credentials;

	/**
	 * PerfectviewApi constructor.
	 * @param App $app
	 * @param array $config
	 */
	public function __construct (App $app, $config) {
		$this->app = $app;
		$this->config = $config;
		$this->logger = new Logger('perfectview_api');

		$clientFactory = new ClientFactory(PerfectviewClient::class);
		$soapOptions = [
			'cache_wsdl' => WSDL_CACHE_NONE
		];
		$clientBuilder = new ClientBuilder($clientFactory, self::API_URL, $soapOptions);
		$clientBuilder->withLogger($this->logger);
//		$clientBuilder->withEventDispatcher(new EventDispatcher());
		$clientBuilder->withClassMaps((new ClassMaps())->getMapCollection());
//		$clientBuilder->addTypeConverter(new DateTimeTypeConverter());
		$this->api = $clientBuilder->build();

	}

	/**
	 * Magic mathod to call api methods raw eg. App::pv_api()->ApiGetCalls($req);
	 * @param $name
	 * @param $arguments
	 * @return mixed
	 */
	public function __call ($name, $arguments) {

		try {
			return call_user_func_array([$this->api, $name], $arguments);
		} catch (\SoapFault $e) {
			throw new PerfectviewApiException($e->getMessage(), $e->getCode(), $e);
		}
	}

	/**
	 * @param PerfectviewMethodInterface $soapType
	 * @return mixed
	 */
	public function call (PerfectviewMethodInterface $soapType) {
		$method = (new \ReflectionClass($soapType))->getShortName();
		$response = $this->__call($method, [(new PerfectviewRequest($soapType))]);
		if (!$response instanceof ResultInterface or !method_exists($response, 'get' . $method . 'Result')) {
			throw new PerfectviewApiException(sprintf("No valid result for method %s.", $method));
		}
		return call_user_func([$response, 'get' . $method . 'Result']);
	}

	/**
	 * @return ApiCredentials
	 */
	public function getCredentials () {
		if (!isset($this->credentials)) {
			$this->credentials = (new ApiCredentials())
				->setApiKey($this->config['api_key'])
				->setDatabaseId($this->config['database_id'])
				->setUserId($this->config['user_id'])
				->setSourceApplication((new ApiSourceApplication())->setName(self::SOURCE_NAME)->setVersion(self::SOURCE_VERSION));
		}
		return $this->credentials;
	}




}