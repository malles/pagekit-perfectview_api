<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationSearchByNameAndGetTelephoneNumbers implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var string
     */
    protected $nameSearchText = null;

    /**
     * @param ApiCredentials $credentials
     * @return $this
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param string $nameSearchText
     * @return $this
     */
    public function setNameSearchText($nameSearchText)
    {
        $this->nameSearchText = $nameSearchText;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameSearchText()
    {
        return $this->nameSearchText;
    }


}

