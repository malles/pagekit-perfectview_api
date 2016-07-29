<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Phpro\SoapClient\Type\ResultInterface;

class RelationGetImageResponse implements ResultInterface
{

    /**
     * @var RelationGetImageResult
     */
    protected $RelationGetImageResult = null;

    /**
     * @param RelationGetImageResult $RelationGetImageResult
     * @return $this
     */
    public function setRelationGetImageResult($RelationGetImageResult)
    {
        $this->RelationGetImageResult = $RelationGetImageResult;
        return $this;
    }

    /**
     * @return RelationGetImageResult
     */
    public function getRelationGetImageResult()
    {
        return $this->RelationGetImageResult;
    }


}

