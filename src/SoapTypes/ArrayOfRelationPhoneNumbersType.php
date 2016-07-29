<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfRelationPhoneNumbersType
{

    /**
     * @var RelationPhoneNumbersType
     */
    protected $RelationPhoneNumbersType = null;

    /**
     * @param RelationPhoneNumbersType $RelationPhoneNumbersType
     * @return $this
     */
    public function setRelationPhoneNumbersType($RelationPhoneNumbersType)
    {
        $this->RelationPhoneNumbersType = $RelationPhoneNumbersType;
        return $this;
    }

    /**
     * @return RelationPhoneNumbersType
     */
    public function getRelationPhoneNumbersType()
    {
        return $this->RelationPhoneNumbersType;
    }


}

