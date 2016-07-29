<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UserGetViewDefinitionsResponse implements ResultInterface
{

    /**
     * @var UserGetViewDefinitionsResult
     */
    protected $UserGetViewDefinitionsResult = null;

    /**
     * @param UserGetViewDefinitionsResult $UserGetViewDefinitionsResult
     * @return $this
     */
    public function setUserGetViewDefinitionsResult($UserGetViewDefinitionsResult)
    {
        $this->UserGetViewDefinitionsResult = $UserGetViewDefinitionsResult;
        return $this;
    }

    /**
     * @return UserGetViewDefinitionsResult
     */
    public function getUserGetViewDefinitionsResult()
    {
        return $this->UserGetViewDefinitionsResult;
    }


}

