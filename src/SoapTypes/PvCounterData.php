<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvCounterData
{

    /**
     * @var TabPageType
     */
    protected $TabPageType = null;

    /**
     * @var int
     */
    protected $Value = null;

    /**
     * @param TabPageType $TabPageType
     * @return $this
     */
    public function setTabPageType($TabPageType)
    {
        $this->TabPageType = $TabPageType;
        return $this;
    }

    /**
     * @return TabPageType
     */
    public function getTabPageType()
    {
        return $this->TabPageType;
    }

    /**
     * @param int $Value
     * @return $this
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->Value;
    }


}

