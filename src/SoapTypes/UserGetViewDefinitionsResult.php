<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class UserGetViewDefinitionsResult
{

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

