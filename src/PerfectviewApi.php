<?php


namespace Bixie\PerfectviewApi;

use Bixie\PerfectviewApi\ApiTrait\ActivityApiTrait;
use Bixie\PerfectviewApi\ApiTrait\RelationApiTrait;
use Bixie\PerfectviewApi\ApiTrait\StaticDataApiTrait;
use Bixie\PerfectviewApi\ApiTrait\UserApiTrait;
use Pagekit\Application as App;
use Bixie\PerfectviewApi\Client\ClassMaps;
use Bixie\PerfectviewApi\Client\PerfectviewClient;
use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;
use Bixie\PerfectviewApi\Client\PerfectviewRequest;
use Bixie\PerfectviewApi\Client\PerfectviewEntityTypeInterface;
use Bixie\PerfectviewApi\Client\PerfectviewFieldDataValueCollection;
use Bixie\PerfectviewApi\SoapTypes\ApiCredentials;
use Bixie\PerfectviewApi\SoapTypes\ApiSourceApplication;
use Bixie\PerfectviewApi\SoapTypes\ArrayOfPvFieldValueData;
use Bixie\PerfectviewApi\SoapTypes\PvFieldData;
use Bixie\PerfectviewApi\SoapTypes\PvFieldValueData;
use Monolog\Logger;
use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Type\ResultInterface;

class PerfectviewApi {

    use StaticDataApiTrait, RelationApiTrait, UserApiTrait, ActivityApiTrait;
    /**
     * @var string
     */
    const API_URL = 'https://api.perfectview.nl/V1/perfectview.asmx?WSDL';
    /**
     * @var string
     */
    const SOURCE_NAME = 'Bixie Perfectview API for Pagekit';
    /**
     * @var string
     */
    const SOURCE_VERSION = '0.1';
    /**
     * @var \Bixie\PerfectviewApi\SoapTypes\guid
     */
    const ROOT_GUID = '10000000-0000-0000-0000-000000000000';

    /**
     * @var App
     */
    protected $app;
    /**
     * @var array
     */
    protected $config;
    /**
     * @var Logger
     */
    protected $logger;
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
     * @param App   $app
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
        $clientBuilder->withClassMaps((new ClassMaps())->getMapCollection());
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
     * @return Logger
     */
    public function getLogger () {
        return $this->logger;
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

    /**
     * helper to setup ArrayOfPvFieldValueData object to submit data fields
     * @param PvFieldData[] $fieldDatas
     * @param array         $data
     * @return ArrayOfPvFieldValueData
     */
    public function getFieldValueDatas (array $fieldDatas, array $data) {
        $relationFieldValues = [];
        foreach ($fieldDatas as $fieldData) {
            if (isset($data[$fieldData->getName()])) {
                $relationFieldValues[] = (new PvFieldValueData())
                    ->setId($fieldData->getId())
                    ->setValue($data[$fieldData->getName()]);
            }
        }
        return (new ArrayOfPvFieldValueData())->setPvFieldValueData($relationFieldValues);
    }

    /**
     * Gets the fieldValueDatas from the objects and combines them with the valueDatas
     * @param PerfectviewEntityTypeInterface $object
     * @return PerfectviewFieldDataValueCollection
     */
    public function getEntityValues (PerfectviewEntityTypeInterface $object) {
        if ($object->getFieldDataValues()) {
            return $object->getFieldDataValues();
        }
        if ($object->getFieldValues()) {
            $entityData = $this->getEntityData($object->getEntityTypeId());
            $fieldDataValueColl = new PerfectviewFieldDataValueCollection(
                $entityData['fieldDatas'],
                $object->getFieldValues()->getItems()->getPvFieldValueData()
            );
            $object->setFieldDataValues($fieldDataValueColl);
            return $fieldDataValueColl;
        }
        return new PerfectviewFieldDataValueCollection([], []);
    }

}