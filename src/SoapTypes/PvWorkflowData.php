<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;
use Bixie\PerfectviewApi\Client\PerfectviewEntityTypeInterface;
use Bixie\PerfectviewApi\Client\PerfectviewEntityTypeTrait;

class PvWorkflowData implements \JsonSerializable, PerfectviewEntityTypeInterface
{

    use JsonSerializableTrait, PerfectviewEntityTypeTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var guid
     */
    protected $EntityTypeId = null;

    /**
     * @param guid $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
        return $this->Id;
    }

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
     * @param guid $EntityTypeId
     * @return $this
     */
    public function setEntityTypeId($EntityTypeId)
    {
        $this->EntityTypeId = $EntityTypeId;
        return $this;
    }

    /**
     * @return guid
     */
    public function getEntityTypeId()
    {
        return $this->EntityTypeId;
    }


}

