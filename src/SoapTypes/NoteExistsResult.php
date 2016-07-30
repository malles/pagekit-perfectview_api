<?php

namespace Bixie\PerfectviewApi\SoapTypes;

use Bixie\PerfectviewApi\Client\PerfectviewResultInterface;
use Bixie\PerfectviewApi\Client\PerfectviewResultTrait;

class NoteExistsResult implements PerfectviewResultInterface
{

    use PerfectviewResultTrait;

    /**
     * @var bool
     */
    protected $Exists = null;

    /**
     * @param bool $Exists
     * @return $this
     */
    public function setExists($Exists)
    {
        $this->Exists = $Exists;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExists()
    {
        return $this->Exists;
    }


}

