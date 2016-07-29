<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Person
{

    /**
     * @var int
     */
    protected $GenderCode = null;

    /**
     * @var string
     */
    protected $Initials = null;

    /**
     * @var string
     */
    protected $FirstName = null;

    /**
     * @var string
     */
    protected $MiddleName = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @param int $GenderCode
     * @return $this
     */
    public function setGenderCode($GenderCode)
    {
        $this->GenderCode = $GenderCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenderCode()
    {
        return $this->GenderCode;
    }

    /**
     * @param string $Initials
     * @return $this
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param string $FirstName
     * @return $this
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $MiddleName
     * @return $this
     */
    public function setMiddleName($MiddleName)
    {
        $this->MiddleName = $MiddleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }


}

