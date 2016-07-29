<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewMethodInterface;

class RelationGetFields implements PerfectviewMethodInterface
{

    /**
     * @var ApiCredentials
     */
    protected $credentials = null;

    /**
     * @var BaseRelationType
     */
    protected $baseRelationType = null;

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
     * @param BaseRelationType $baseRelationType
     * @return $this
     */
    public function setBaseRelationType($baseRelationType)
    {
        $this->baseRelationType = $baseRelationType;
        return $this;
    }

    /**
     * @return BaseRelationType
     */
    public function getBaseRelationType()
    {
        return $this->baseRelationType;
    }


}

