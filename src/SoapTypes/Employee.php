<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Employee
{

    /**
     * @var string
     */
    protected $Function = null;

    /**
     * @var string
     */
    protected $Telephone = null;

    /**
     * @var string
     */
    protected $Email = null;

    /**
     * @var string
     */
    protected $Password = null;

    /**
     * @param string $Function
     * @return $this
     */
    public function setFunction($Function)
    {
        $this->Function = $Function;
        return $this;
    }

    /**
     * @return string
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * @param string $Telephone
     * @return $this
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param string $Email
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Password
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }


}

