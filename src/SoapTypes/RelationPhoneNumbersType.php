<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationPhoneNumbersType
{

    /**
     * @var PvRelationData
     */
    protected $relation = null;

    /**
     * @var ArrayOfPvTelephoneNumberData
     */
    protected $TelephoneNumbers = null;

    /**
     * @param PvRelationData $relation
     * @return $this
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * @return PvRelationData
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param ArrayOfPvTelephoneNumberData $TelephoneNumbers
     * @return $this
     */
    public function setTelephoneNumbers($TelephoneNumbers)
    {
        $this->TelephoneNumbers = $TelephoneNumbers;
        return $this;
    }

    /**
     * @return ArrayOfPvTelephoneNumberData
     */
    public function getTelephoneNumbers()
    {
        return $this->TelephoneNumbers;
    }


}

