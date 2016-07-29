<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Organisation
{

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $Street = null;

    /**
     * @var string
     */
    protected $StreetNumber = null;

    /**
     * @var string
     */
    protected $StreetSuffix = null;

    /**
     * @var string
     */
    protected $PostalCode = null;

    /**
     * @var string
     */
    protected $City = null;

    /**
     * @var guid
     */
    protected $CountryId = null;

    /**
     * @var int
     */
    protected $LanguageCode = null;

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

    /**
     * @param string $Street
     * @return $this
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $StreetNumber
     * @return $this
     */
    public function setStreetNumber($StreetNumber)
    {
        $this->StreetNumber = $StreetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->StreetNumber;
    }

    /**
     * @param string $StreetSuffix
     * @return $this
     */
    public function setStreetSuffix($StreetSuffix)
    {
        $this->StreetSuffix = $StreetSuffix;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetSuffix()
    {
        return $this->StreetSuffix;
    }

    /**
     * @param string $PostalCode
     * @return $this
     */
    public function setPostalCode($PostalCode)
    {
        $this->PostalCode = $PostalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }

    /**
     * @param string $City
     * @return $this
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param guid $CountryId
     * @return $this
     */
    public function setCountryId($CountryId)
    {
        $this->CountryId = $CountryId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getCountryId()
    {
        return $this->CountryId;
    }

    /**
     * @param int $LanguageCode
     * @return $this
     */
    public function setLanguageCode($LanguageCode)
    {
        $this->LanguageCode = $LanguageCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getLanguageCode()
    {
        return $this->LanguageCode;
    }


}

