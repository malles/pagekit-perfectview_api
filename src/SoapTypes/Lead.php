<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class Lead
{

    /**
     * @var string
     */
    protected $Subject = null;

    /**
     * @var string
     */
    protected $ExtraInfo = null;

    /**
     * @var guid
     */
    protected $HowDidYouFindUsId = null;

    /**
     * @var guid
     */
    protected $NumberOfEmployeesId = null;

    /**
     * @var string
     */
    protected $LEA_actie = null;

    /**
     * @var string
     */
    protected $LEA_actienav = null;

    /**
     * @var string
     */
    protected $LEA_groep = null;

    /**
     * @var string
     */
    protected $LEA_toegewezenaan = null;

    /**
     * @param string $Subject
     * @return $this
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $ExtraInfo
     * @return $this
     */
    public function setExtraInfo($ExtraInfo)
    {
        $this->ExtraInfo = $ExtraInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }

    /**
     * @param guid $HowDidYouFindUsId
     * @return $this
     */
    public function setHowDidYouFindUsId($HowDidYouFindUsId)
    {
        $this->HowDidYouFindUsId = $HowDidYouFindUsId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getHowDidYouFindUsId()
    {
        return $this->HowDidYouFindUsId;
    }

    /**
     * @param guid $NumberOfEmployeesId
     * @return $this
     */
    public function setNumberOfEmployeesId($NumberOfEmployeesId)
    {
        $this->NumberOfEmployeesId = $NumberOfEmployeesId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getNumberOfEmployeesId()
    {
        return $this->NumberOfEmployeesId;
    }

    /**
     * @param string $LEA_actie
     * @return $this
     */
    public function setLEA_actie($LEA_actie)
    {
        $this->LEA_actie = $LEA_actie;
        return $this;
    }

    /**
     * @return string
     */
    public function getLEA_actie()
    {
        return $this->LEA_actie;
    }

    /**
     * @param string $LEA_actienav
     * @return $this
     */
    public function setLEA_actienav($LEA_actienav)
    {
        $this->LEA_actienav = $LEA_actienav;
        return $this;
    }

    /**
     * @return string
     */
    public function getLEA_actienav()
    {
        return $this->LEA_actienav;
    }

    /**
     * @param string $LEA_groep
     * @return $this
     */
    public function setLEA_groep($LEA_groep)
    {
        $this->LEA_groep = $LEA_groep;
        return $this;
    }

    /**
     * @return string
     */
    public function getLEA_groep()
    {
        return $this->LEA_groep;
    }

    /**
     * @param string $LEA_toegewezenaan
     * @return $this
     */
    public function setLEA_toegewezenaan($LEA_toegewezenaan)
    {
        $this->LEA_toegewezenaan = $LEA_toegewezenaan;
        return $this;
    }

    /**
     * @return string
     */
    public function getLEA_toegewezenaan()
    {
        return $this->LEA_toegewezenaan;
    }


}

