<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetEmployeesResponse implements ResultInterface
{

    /**
     * @var RelationshipGetEmployeesResult
     */
    protected $RelationshipGetEmployeesResult = null;

    /**
     * @param RelationshipGetEmployeesResult $RelationshipGetEmployeesResult
     * @return $this
     */
    public function setRelationshipGetEmployeesResult($RelationshipGetEmployeesResult)
    {
        $this->RelationshipGetEmployeesResult = $RelationshipGetEmployeesResult;
        return $this;
    }

    /**
     * @return RelationshipGetEmployeesResult
     */
    public function getRelationshipGetEmployeesResult()
    {
        return $this->RelationshipGetEmployeesResult;
    }


}

