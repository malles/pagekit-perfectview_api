<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Parameter
{

    /**
     * @var DatabaseParameter
     */
    protected $parameter = null;

    /**
     * @var string
     */
    protected $value = null;

    /**
     * @param DatabaseParameter $parameter
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * @return DatabaseParameter
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }


}

