<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvTelephoneNumberData
{

    /**
     * @var PvTelephoneNumberData
     */
    protected $PvTelephoneNumberData = null;

    /**
     * @param PvTelephoneNumberData $PvTelephoneNumberData
     * @return $this
     */
    public function setPvTelephoneNumberData($PvTelephoneNumberData)
    {
        $this->PvTelephoneNumberData = $PvTelephoneNumberData;
        return $this;
    }

    /**
     * @return PvTelephoneNumberData
     */
    public function getPvTelephoneNumberData()
    {
        return $this->PvTelephoneNumberData;
    }


}

