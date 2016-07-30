<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class RelationshipGetEmployeesModifiedResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

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

