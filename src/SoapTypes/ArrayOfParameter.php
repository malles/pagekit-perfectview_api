<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfParameter
{

    /**
     * @var Parameter
     */
    protected $Parameter = null;

    /**
     * @param Parameter $Parameter
     * @return $this
     */
    public function setParameter($Parameter)
    {
        $this->Parameter = $Parameter;
        return $this;
    }

    /**
     * @return Parameter
     */
    public function getParameter()
    {
        return $this->Parameter;
    }


}

