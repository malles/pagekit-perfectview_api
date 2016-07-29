<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UsersGetLanguageResponse implements ResultInterface
{

    /**
     * @var UsersGetLanguageResult
     */
    protected $UsersGetLanguageResult = null;

    /**
     * @param UsersGetLanguageResult $UsersGetLanguageResult
     * @return $this
     */
    public function setUsersGetLanguageResult($UsersGetLanguageResult)
    {
        $this->UsersGetLanguageResult = $UsersGetLanguageResult;
        return $this;
    }

    /**
     * @return UsersGetLanguageResult
     */
    public function getUsersGetLanguageResult()
    {
        return $this->UsersGetLanguageResult;
    }


}

