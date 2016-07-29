<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetTelephoneBook_V2Response implements ResultInterface
{

    /**
     * @var RelationGetTelephoneBookResult
     */
    protected $RelationGetTelephoneBook_V2Result = null;

    /**
     * @param RelationGetTelephoneBookResult $RelationGetTelephoneBook_V2Result
     * @return $this
     */
    public function setRelationGetTelephoneBook_V2Result($RelationGetTelephoneBook_V2Result)
    {
        $this->RelationGetTelephoneBook_V2Result = $RelationGetTelephoneBook_V2Result;
        return $this;
    }

    /**
     * @return RelationGetTelephoneBookResult
     */
    public function getRelationGetTelephoneBook_V2Result()
    {
        return $this->RelationGetTelephoneBook_V2Result;
    }


}

