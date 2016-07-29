<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class CreateDatabaseData
{

    /**
     * @var Database
     */
    protected $DatabaseData = null;

    /**
     * @var Organisation
     */
    protected $OrganisationData = null;

    /**
     * @var Person
     */
    protected $FirstUserPersonData = null;

    /**
     * @var Employee
     */
    protected $FirstUserEmployeeData = null;

    /**
     * @var Person
     */
    protected $SlaGeneralContactPersonData = null;

    /**
     * @var Employee
     */
    protected $SlaGeneralContactEmployeeData = null;

    /**
     * @var Person
     */
    protected $SlaFinancialContactPersonData = null;

    /**
     * @var Employee
     */
    protected $SlaFinancialContactEmployeeData = null;

    /**
     * @var Person
     */
    protected $SlaTechnicalContactPersonData = null;

    /**
     * @var Employee
     */
    protected $SlaTechnicalContactEmployeeData = null;

    /**
     * @var Lead
     */
    protected $LeadData = null;

    /**
     * @var Workflow
     */
    protected $WorkflowData = null;

    /**
     * @var ArrayOfParameter
     */
    protected $Parameters = null;

    /**
     * @param Database $DatabaseData
     * @return $this
     */
    public function setDatabaseData($DatabaseData)
    {
        $this->DatabaseData = $DatabaseData;
        return $this;
    }

    /**
     * @return Database
     */
    public function getDatabaseData()
    {
        return $this->DatabaseData;
    }

    /**
     * @param Organisation $OrganisationData
     * @return $this
     */
    public function setOrganisationData($OrganisationData)
    {
        $this->OrganisationData = $OrganisationData;
        return $this;
    }

    /**
     * @return Organisation
     */
    public function getOrganisationData()
    {
        return $this->OrganisationData;
    }

    /**
     * @param Person $FirstUserPersonData
     * @return $this
     */
    public function setFirstUserPersonData($FirstUserPersonData)
    {
        $this->FirstUserPersonData = $FirstUserPersonData;
        return $this;
    }

    /**
     * @return Person
     */
    public function getFirstUserPersonData()
    {
        return $this->FirstUserPersonData;
    }

    /**
     * @param Employee $FirstUserEmployeeData
     * @return $this
     */
    public function setFirstUserEmployeeData($FirstUserEmployeeData)
    {
        $this->FirstUserEmployeeData = $FirstUserEmployeeData;
        return $this;
    }

    /**
     * @return Employee
     */
    public function getFirstUserEmployeeData()
    {
        return $this->FirstUserEmployeeData;
    }

    /**
     * @param Person $SlaGeneralContactPersonData
     * @return $this
     */
    public function setSlaGeneralContactPersonData($SlaGeneralContactPersonData)
    {
        $this->SlaGeneralContactPersonData = $SlaGeneralContactPersonData;
        return $this;
    }

    /**
     * @return Person
     */
    public function getSlaGeneralContactPersonData()
    {
        return $this->SlaGeneralContactPersonData;
    }

    /**
     * @param Employee $SlaGeneralContactEmployeeData
     * @return $this
     */
    public function setSlaGeneralContactEmployeeData($SlaGeneralContactEmployeeData)
    {
        $this->SlaGeneralContactEmployeeData = $SlaGeneralContactEmployeeData;
        return $this;
    }

    /**
     * @return Employee
     */
    public function getSlaGeneralContactEmployeeData()
    {
        return $this->SlaGeneralContactEmployeeData;
    }

    /**
     * @param Person $SlaFinancialContactPersonData
     * @return $this
     */
    public function setSlaFinancialContactPersonData($SlaFinancialContactPersonData)
    {
        $this->SlaFinancialContactPersonData = $SlaFinancialContactPersonData;
        return $this;
    }

    /**
     * @return Person
     */
    public function getSlaFinancialContactPersonData()
    {
        return $this->SlaFinancialContactPersonData;
    }

    /**
     * @param Employee $SlaFinancialContactEmployeeData
     * @return $this
     */
    public function setSlaFinancialContactEmployeeData($SlaFinancialContactEmployeeData)
    {
        $this->SlaFinancialContactEmployeeData = $SlaFinancialContactEmployeeData;
        return $this;
    }

    /**
     * @return Employee
     */
    public function getSlaFinancialContactEmployeeData()
    {
        return $this->SlaFinancialContactEmployeeData;
    }

    /**
     * @param Person $SlaTechnicalContactPersonData
     * @return $this
     */
    public function setSlaTechnicalContactPersonData($SlaTechnicalContactPersonData)
    {
        $this->SlaTechnicalContactPersonData = $SlaTechnicalContactPersonData;
        return $this;
    }

    /**
     * @return Person
     */
    public function getSlaTechnicalContactPersonData()
    {
        return $this->SlaTechnicalContactPersonData;
    }

    /**
     * @param Employee $SlaTechnicalContactEmployeeData
     * @return $this
     */
    public function setSlaTechnicalContactEmployeeData($SlaTechnicalContactEmployeeData)
    {
        $this->SlaTechnicalContactEmployeeData = $SlaTechnicalContactEmployeeData;
        return $this;
    }

    /**
     * @return Employee
     */
    public function getSlaTechnicalContactEmployeeData()
    {
        return $this->SlaTechnicalContactEmployeeData;
    }

    /**
     * @param Lead $LeadData
     * @return $this
     */
    public function setLeadData($LeadData)
    {
        $this->LeadData = $LeadData;
        return $this;
    }

    /**
     * @return Lead
     */
    public function getLeadData()
    {
        return $this->LeadData;
    }

    /**
     * @param Workflow $WorkflowData
     * @return $this
     */
    public function setWorkflowData($WorkflowData)
    {
        $this->WorkflowData = $WorkflowData;
        return $this;
    }

    /**
     * @return Workflow
     */
    public function getWorkflowData()
    {
        return $this->WorkflowData;
    }

    /**
     * @param ArrayOfParameter $Parameters
     * @return $this
     */
    public function setParameters($Parameters)
    {
        $this->Parameters = $Parameters;
        return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getParameters()
    {
        return $this->Parameters;
    }


}

