<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class ArrayOfPvUserDatabase
{

    /**
     * @var PvUserDatabase
     */
    protected $PvUserDatabase = null;

    /**
     * @param PvUserDatabase $PvUserDatabase
     * @return $this
     */
    public function setPvUserDatabase($PvUserDatabase)
    {
        $this->PvUserDatabase = $PvUserDatabase;
        return $this;
    }

    /**
     * @return PvUserDatabase
     */
    public function getPvUserDatabase()
    {
        return $this->PvUserDatabase;
    }


}

