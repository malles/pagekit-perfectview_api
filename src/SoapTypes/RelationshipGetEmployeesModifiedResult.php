<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class RelationshipGetEmployeesModifiedResult
{

    /**
     * @var ArrayOfPvRelationshipData
     */
    protected $Employees = null;

    /**
     * @param ArrayOfPvRelationshipData $Employees
     * @return $this
     */
    public function setEmployees($Employees)
    {
        $this->Employees = $Employees;
        return $this;
    }

    /**
     * @return ArrayOfPvRelationshipData
     */
    public function getEmployees()
    {
        return $this->Employees;
    }


}

