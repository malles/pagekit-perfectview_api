<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\JsonSerializableTrait;

class PvProductGroupData implements \JsonSerializable
{

    use JsonSerializableTrait;

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Name = null;

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


}

