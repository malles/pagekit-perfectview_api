<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class UserGetViewDefinitionsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var ArrayOfPvViewDefinitionData
     */
    protected $Views = null;

    /**
     * @param ArrayOfPvViewDefinitionData $Views
     * @return $this
     */
    public function setViews($Views)
    {
        $this->Views = $Views;
        return $this;
    }

    /**
     * @return ArrayOfPvViewDefinitionData
     */
    public function getViews()
    {
        return $this->Views;
    }


}

