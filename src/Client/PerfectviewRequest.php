<?php


namespace Bixie\PerfectviewApi\Client;


use Pagekit\Application as App;
use Phpro\SoapClient\Type\MultiArgumentRequestInterface;

class PerfectviewRequest implements MultiArgumentRequestInterface {
    /**
     * @var array
     */
    protected $soapType = [];

    public function __construct ($soapType) {
        if ($soapType instanceof PerfectviewMethodInterface) {
            $soapType->setCredentials(App::pv_api()->getCredentials());
        }
        $this->soapType[] = $soapType;

    }

    /**
     * @return array
     */
    public function getArguments () {
        return $this->soapType;
    }

}