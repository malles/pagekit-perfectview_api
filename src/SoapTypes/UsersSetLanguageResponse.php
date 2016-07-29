<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class UsersSetLanguageResponse implements ResultInterface
{

    /**
     * @var UsersSetLanguageResult
     */
    protected $UsersSetLanguageResult = null;

    /**
     * @param UsersSetLanguageResult $UsersSetLanguageResult
     * @return $this
     */
    public function setUsersSetLanguageResult($UsersSetLanguageResult)
    {
        $this->UsersSetLanguageResult = $UsersSetLanguageResult;
        return $this;
    }

    /**
     * @return UsersSetLanguageResult
     */
    public function getUsersSetLanguageResult()
    {
        return $this->UsersSetLanguageResult;
    }


}

