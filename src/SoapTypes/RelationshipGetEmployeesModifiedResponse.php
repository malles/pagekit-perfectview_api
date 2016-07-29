<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationshipGetEmployeesModifiedResponse implements ResultInterface
{

    /**
     * @var RelationshipGetEmployeesModifiedResult
     */
    protected $RelationshipGetEmployeesModifiedResult = null;

    /**
     * @param RelationshipGetEmployeesModifiedResult
     * $RelationshipGetEmployeesModifiedResult
     * @return $this
     */
    public function setRelationshipGetEmployeesModifiedResult($RelationshipGetEmployeesModifiedResult)
    {
        $this->RelationshipGetEmployeesModifiedResult = $RelationshipGetEmployeesModifiedResult;
        return $this;
    }

    /**
     * @return RelationshipGetEmployeesModifiedResult
     */
    public function getRelationshipGetEmployeesModifiedResult()
    {
        return $this->RelationshipGetEmployeesModifiedResult;
    }


}

